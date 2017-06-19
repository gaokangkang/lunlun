<?php

  namespace App\Http\Controllers\Student;

  use App\Http\Model\Paper;
  use App\Http\Model\Tpaper;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Crypt;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Session;
  use Storage;
  use App\Http\Requests;

  class StudentController extends CommonController
  {
      //学生论文首页
  	public function index()
  	{
        $session = Session::get('student_name');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
        $ts_id = DB::table('teacher-student')->where('student_id','like',$student_id)->value('ts_id');
        $rul = DB::table('paper')->where('student_id','like',$student_id)->get();
  		return view('studenthome.index',['rul'=>$rul,'session'=>$session,'ts_id'=>$ts_id,'student'=>$student]);
  	}

  	  //上传论文
      public function uppaper(Request $request)
      {

          $session = Session::get('student_name');
          $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
          $student = DB::table('student')->where('student_name','like',$session)->get();
          if($input = Input::all()){
              $time = date('Y-m-d,H:i:s',time());
              $paper_name = $input['paper_name'];
              $paper_content = $input['paper_content'];

              if ($request->isMethod('post'))
              {
                  $file = $request->file('paper_content');
                  //文件是否上传成功
                  if ($file->isValid()){
                      //获取文件相关信息
                      $originalName = $file->getClientOriginalName();  //文件原名
                      $ext = $file->getClientOriginalExtension();  //扩展名
                      $realPath = $file->getRealPath();     //临时文件的绝对路径
                      $type = $file->getClientMimeType();   // image/jpeg

                      //上传文件(上传后文件的名字)
                      //$fileName = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                      //使用新建的upload本地存储空间
                      //$bool = Storage::disk('uploads')->put($fileName, file_get_contents($realPath));
                      $bool = Storage::disk('uploads')->put($originalName, file_get_contents($realPath));
                  }
              }
              $paper_id = DB::table('paper')->insertGetId(
                  ['student_id' => $student_id, 'paper_name'=>$paper_name,'paper_time'=>$time,'paper_content'=>$originalName,]
              );
              if($paper_id){
                  Session::put('paper_id',$paper_id);
                  return redirect('student/index');
              }else{
                  echo 'no ok';
              }
          }else{
              return view('studenthome.uppaper',['student'=>$student]);
          }
      }
      //老师回复论文
      public function lunwen($paper_id)
      {
         $session = Session::get('student_name');
          $student = DB::table('student')->where('student_name','like',$session)->get();
          $paper = DB::table('paper')->where('paper_id','like',$paper_id)->get();
          $tpaper = DB::table('tpaper')->where('paper_id','like',$paper_id)->get();
          foreach ($student as $key => $value) {
            $teacher_id = DB::table('teacher-student')->where('Student_id','like',$value->student_id)->value('teacher_id');
          }
          $teacher_name = DB::table('teacher')->where('teacher_id','like',$teacher_id)->value('teacher_name');
          
          $comment = DB::table('comment')->where('paper_id','like',$paper_id)->get();


          return view('studenthome.lunwen',['paper'=>$paper,'tpaper'=>$tpaper,'comment'=>$comment,'student'=>$student,'teacher_name'=>$teacher_name]);
      }

       //下载论文
      public function download($paper_id)
      {
         /* $session = Session::get('student_name');
          $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
          $download = DB::table('paper')->where('student_id','=',$student_id)->value('paper_content');*/
          $paper = Paper::where('paper_id','=',$paper_id)->get();
          //dd($paper[0]['paper_content']);
          $a = $paper[0]['paper_content'];
          //dd($a);
       return response()->download(
            realpath(base_path('public/uploads'))."/$a"
         );
      }

      //下载老师论文
       public function tdownload($paper_id)
      {
          $tpaper = Tpaper::where('paper_id','=',$paper_id)->get();
          $a = $tpaper[0]['tpaper_content'];
          return response()->download(
              realpath(base_path('public/uploads'))."/$a"
          );
      }

      //删除论文
       public function destroy($paper_id)
      {
         $paper = Paper::where('paper_id','=',$paper_id)->delete();
         if($paper)
         {
             return redirect('student/index');
         }

      }

      //查看论文
      public function checkpaper()
      {
            return view('studenthome.checkpaper');
      }
 
    public function teacher()
    {
        return view('studenthome.teacher');
    }
   public function message()
    {
        return view('studenthome.message');
    }
      public function setting(Request $request)
      {
          $a = Session::get('student_name');
          $student = DB::table('student')->where('student_name','like',$a)->get();

          if($input = Input::all()) {
              $image = $input['images'];

              if ($request->isMethod('post'))
              {
                  $file = $request->file('images');
                  //文件是否上传成功
                  if ($file->isValid()) {
                      //获取文件相关信息
                      $originalName = $file->getClientOriginalName();  //文件原名
                      $ext = $file->getClientOriginalExtension();  //扩展名
                      $realPath = $file->getRealPath();     //临时文件的绝对路径
                      $type = $file->getClientMimeType();   // image/jpeg
                      //上传文件(上传后文件的名字)
                      //$fileName = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                      //使用新建的upload本地存储空间
                      //$bool = Storage::disk('uploads')->put($fileName, file_get_contents($realPath));
                      $bool = Storage::disk('uploads')->put($originalName, file_get_contents($realPath));

                  }
              }
              if ($bool)
              {
                  $student_img = DB::table('student')->where('student_name','like',$a)->update(
                      ['student_img' => $originalName]
                  );
              }
              if ($student_img)
              {
                  return redirect('student/setting');
              }

          }
          return view('studenthome.setting',['student'=>$student]);
      }
      public function pwd(){
          $student_name = Session::get('student_name');
          $student = DB::table('student')->where('student_name','like',$student_name)->get();
          $pwdencrypt = DB::table('student')->where('student_name','like',$student_name)->value('student_pwd');
          $pwddecrypt = Crypt::decrypt($pwdencrypt);
          //dd($pwddecrypt);
          //dd($student);
          if($input = Input::all()){
              $oldpwd = $input['oldpwd'];
              $psd = $input['pwd'];
              $repwd = $input['repwd'];

              //dd($oldpwd);

              if($oldpwd && $psd && $repwd){
                  if($oldpwd == $pwddecrypt){
                      if($psd == $repwd){
                          $psd = Crypt::encrypt($psd);
                          //dd($psd);
                          $pwd = DB::table('student')->where('student_name','like',$student_name)->update(
                              ['student_pwd'=> $psd]
                          );
                          //dd($pwd);
                          if($pwd){
                              return redirect("student/login");
                          }else{
                              return back()->with('msg', '修改失败');
                          }

                      }else{
                          return redirect()->back()->withInput()->withErrors('新密码与确认密码不同！');
                      }
                  }else{
                      //dd($oldpwd);
                      return redirect()->back()->withInput()->withErrors('旧密码错误');
                  }
              }else{
                  //return redirect()->back()->withInput()->withErrors('密码不能为空！');

              }

          }
          return view('studenthome.setting',['student'=>$student]);
      }

      public function up(){
          if($input = Input::all()){
              $student_name = Session::get('student_name');
              //dd($input['email']);
              $email = DB::table('student')->where('student_name','like',$student_name)->update(
                  ['student_email'=> $input['email']]
              );
              if($email){
                  return redirect('student/setting');
              }else{
                  return '修改失败！';
              }
          }
      }
  }