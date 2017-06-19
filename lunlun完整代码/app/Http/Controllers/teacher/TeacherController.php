<?php


  namespace App\Http\Controllers\teacher;

  use App\Http\Model\Paper;
  use App\Http\Model\Teacher;
  use App\Http\Model\Teacher_Student;
  use App\Http\Model\Tpaper;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Session;
  use Illuminate\Support\Facades\Storage;
  use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

  class TeacherController extends CommonController
  {
  	public function index()
  	{
  	    $teacher_name = Session::get('teacher_name');
  	    $teacher = DB::table('teacher')->where('teacher_name','like',$teacher_name)->get();
  		return view('teacherhome.index',['teacher'=>$teacher]);
  	}


  	//密码修改页
    public function edit(Request $request)
    {
        if ($input = Input::all()) {
            $a = Session::get('teacher_name');
            $teachers = Teacher::where('teacher_name', '=', $a)->get();
            //dd($teachers[0]['teacher_pwd']);
            if ($input['mpass'] == $teachers[0]['teacher_pwd']) {
                $teachers = DB::table('teacher')->where('teacher_name', '=', $a)->update(
                    ['teacher_pwd' => $input['newpass']]
                );
                if($teachers){
                    return redirect("student/login");
                }else{
                    return back()->with('msg', '修改失败');
                }
                Session::put('success',$teachers);
            } else {
                return back()->with('msg', '原密码错误');
            }
        }
        return view('teacheredit/edit');
    }

      //老师个人信息修改页
      public function add(Request $request)
      {
          $a = Session::get('teacher_name');
          $teacher = DB::table('teacher')->where('teacher_name','like',$a)->get();
          //dd($teacher);
          if ($input = Input::all())
          {
              //dd($input);
              //$images = $input['images'];
              foreach ($teacher as $value){
                  $email = $input['youxiang'];
                  $content = $input['content'];
                  if ($request->isMethod('post'))
                  {
                      $file = $request->file('images');
                      //dd($file);
                      if($file != null){
                          //文件是否上传成功
                          if ($file->isValid()) {
                              //获取文件相关信息
                              $originalName = $file->getClientOriginalName();  //文件原名
                              $realPath = $file->getRealPath();     //临时文件的绝对路径
                              $bool = Storage::disk('uploads')->put($originalName, file_get_contents($realPath));
                              //dd($bool);
                          }
                          if ($bool)
                          {
                              $teacher_img = $originalName;
                          }else{
                              return '图片上传失败！';
                          }

                      }else{
                          $teacher_img = $value->teacher_img;
                      }
                      if($email == null){
                          $email = $value->teacher_email;
                      }
                      if($content == null){
                          $content = $value->teacher_jianjie;
                      }
                  }
              }

              $update= DB::table('teacher')->where('teacher_name','like',$a)->update(
                      ['teacher_img' => $teacher_img,'teacher_email'=>$email,'teacher_jianjie'=>$content]
                  );
              if($update){
                  return redirect('teacher/update');
              }else{
                  return '修改失败！';
              }


          }
          return view('teacheredit/add',['teacher'=>$teacher]);
      }
      //老师个人信息页
    public function update()
    {
        $a = Session::get('teacher_name');
        $teacher = DB::table('teacher')->where('teacher_name','=',$a)->get();
        return view('teacheredit/update',['teacher'=>$teacher]);
    }

    public function news()
    {
      return view('teachernews/news');
    }

    //学生名单
    public function lists()
    {
        $teacher = Session::get('teacher_name');
        $teacher_id =Teacher::where('teacher_name','=',$teacher)->value('teacher_id');
        $list = DB::table('teacher-student')->where('teacher_id','like',$teacher_id)->get();
        $array= array();
        $array1=array();
        $i = 0;
        foreach ($list as $value){
            $student_name = DB::table('student')->where('student_id','like',$value->student_id)->value('student_name');
            $student_img = DB::table('student')->where('student_id','like',$value->student_id)->value('student_img');
            $array[$i] = $student_name;
            $array1[$i] = $student_img;
            $i++;
        }

      return view('teacherhome/lists',['array'=>$array,'session'=>$teacher,'i'=>$i,'array1'=>$array1]);
    }

    //学生论文列表页
    public function lunwen($student_name)
    {
        $student_id = DB::table('student')->where('student_name','like',$student_name)->value('student_id');
        $rul = DB::table('paper')->where('student_id','like',$student_id)->get();
        //dd($rul);
        //$trul = DB::table('tpaper')->get();
      return view('teacherhome/lunwen',['rul'=>$rul]);
    }

    //老师论文页
    public function tlunwen($paper_id)
    {
        $session = Session::get('teacher_name');
        $paper = DB::table('paper')->where('paper_id','like',$paper_id)->get();
        $tpaper = DB::table('tpaper')->where('paper_id','like',$paper_id)->get();
        $comment = DB::table('comment')->where('paper_id','like',$paper_id)->get();
        return view('teacherhome/tlunwen',['paper'=>$paper,'tpaper'=>$tpaper,'comment'=>$comment,'session'=>$session]);
    }

     public function tuppaper($paper_id,Request $request)
    {
        $teacher_name = Session::get('teacher_name');
        $teacher_id = DB::table('teacher')->where('teacher_name','=',$teacher_name)->value('teacher_id');
        $student_id = DB::table('paper')->where('paper_id','=',$paper_id)->value('student_id');
        if ($input = Input::all())
        {
            $time = date('Y-m-d,H:i:s',time());
            $tpaper_name = $input['tpaper_name'];
            $tpaper_content = $input['tpaper_content'];

            if ($request->isMethod('post'))
            {
                $file = $request->file('tpaper_content');
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


            $tpaper = DB::table('tpaper')->insert(['paper_id'=>$paper_id,'tpaper_name'=>$tpaper_name,'tpaper_time'=>$time,'teacher_id'=>$teacher_id,'tpaper_content'=>$originalName]);
            if($tpaper)
            {
                return redirect("teacher/tlunwen/$paper_id");
            }
        }
        return view('teacherhome/tuppaper',['paper_id'=>$paper_id]);
    }

    //下载学生论文
    public function download($paper_id)
    {
        $paper = Paper::where('paper_id','=',$paper_id)->get();
        $a = $paper[0]['paper_content'];
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
    public function destory($paper_id)
    {
       $tpaper = DB::table('tpaper')->where('paper_id','=',$paper_id)->delete();
       if ($tpaper)
       {
           return redirect("teacher/tlunwen/$paper_id");
       }
    }
    //老师留言
      public function comment($paper_id)
      {
          if ($input = Input::all()) {
              $comment = $input['comment'];
              $time = date('Y-m-d,H:i:s',time());
              $tcomment = DB::table('comment')->where('paper_id','like',$paper_id)->insert(['paper_id'=>$paper_id,'paper_time'=>$time,'paper_comment'=>$comment]);
              if ($tcomment)
              {
                  return redirect("teacher/tlunwen/$paper_id");
              }

          }
      }
      public function logo()
      {
          return view('teacherhome/logo');
      }

  }