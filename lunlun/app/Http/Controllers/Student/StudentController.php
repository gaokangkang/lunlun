<?php

  namespace App\Http\Controllers\Student;

  use Illuminate\Support\Facades\DB;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Session;

  class StudentController extends CommonController
  {

  	public function index()
  	{
        $session = Session::get('student_name');
        $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
        $rul = DB::table('paper')->where('student_id','like',$student_id)->get();
  		return view('studenthome.index',['rul'=>$rul,'session'=>$session]);
  	}

      public function uppaper()
      {
          $session = Session::get('student_name');
          $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
          if($input = Input::all()){
              $time = date('Y-m-d,H:i:s',time());
              $paper_name = $input['paper_name'];

              $paper_content = $input['paper_content'];
              $paper_id = DB::table('paper')->insertGetId(
                  ['student_id' => $student_id, 'paper_name'=>$paper_name,'paper_time'=>$time,'paper_content'=>$paper_content,]
              );
              if($paper_id){
                  return redirect('student/index');
              }else{
                  echo 'no ok';
              }
          }else{
              return view('studenthome.uppaper');
          }
      }
    public function teacher()
    {
        return view('studenthome.teacher');
    }
   public function message()
    {
        return view('studenthome.message');
    }
     public function setting()
    {
        return view('studenthome.setting');
    }
  }