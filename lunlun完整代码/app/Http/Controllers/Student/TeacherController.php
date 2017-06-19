<?php

namespace App\Http\Controllers\Student;

use App\Http\Model\Paper;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Storage;
use App\Http\Requests;

class TeacherController extends CommonController
{
    public function teacher()
    {
        $session = Session::get('student_name');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $list = DB::table('student')->where('student_name','like',$session)->get();
        //dd($list);
        foreach($list as $value){
            $student_college = $value->student_college;
            $issue_id = DB::table('student-issue')->where('student_id','like',$value->student_id)->value('issue_id');
            $teacher_id = DB::table('teacher-student')->where('student_id','like',$value->student_id)->value('teacher_id');
            //dd($teacher_id);
        }
        if($issue_id!=null){
            $issue = DB::table('issue')->where('issue_id','like',$issue_id)->get();
        }else{
            $issue = null;
        }
        $rul = DB::table('teacher')->where('teacher_college','like',$student_college)->get();

        return view('studentteacher.teacher',['rul'=>$rul,'teacher_id'=>$teacher_id,'issue'=>$issue,'list'=>$list,'student'=>$student]);

    }

    public function issue($teacher_id)  //课题页
    {
        $session = Session::get('student_name');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $rul = DB::table('issue')->where('teacher_id','like',$teacher_id)->get();
        $teacher_name = DB::table('teacher')->where('teacher_id','like',$teacher_id)->value('teacher_name');
       // dd($rul);
        return view('studentteacher.issue',['teacher_name'=>$teacher_name,'rul'=>$rul,'student'=>$student]);
    }
    public function sure($issue_id){   //确认选择的课题
        $total = DB::table('issue')->where('issue_id','like',$issue_id)->value('issue_total');
        $count = DB::table('teacher-student')->where('issue_id','like',$issue_id)->count();
        //dd($total);
        if($count<$total){
            $session = Session::get('student_name');
            $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
            $a = DB::table('student-issue')->where([['student_id','like',$student_id],['issue_id','like',$issue_id]])->value('si_id');
            if($a==null){
                $teacher_id = DB::table('issue')->where('issue_id','like',$issue_id)->value("teacher_id");
                $issue_name = DB::table('issue')->where('issue_id','like',$issue_id)->value("issue_name");
                $time = date('Y-m-d,H:i:s',time());
                $insert = DB::table('tnews')->insert([
                    'teacher_id'=>$teacher_id,
                    'tnews_name'=>$session."所选的课题",
                    'tnews_content'=>$session."同学选择了".$issue_name."这一课题，请老师及时审核！",
                    'tnews_time'=>$time,
                    'tnews_status'=> 0,
                ]);
                $insert1 =  DB::table('student-issue')->insert([
                    'student_id'=>$student_id,
                    'issue_id'=>$issue_id,
                ]);
                if($insert && $insert1){
                    return redirect('student/index');
                }else{
                    return redirect('student/teacher');
                }
            }else{
                //return "您已经申请过了，不能再申请了！";
                return back()->with('msg','您已经申请过了，不能再申请了！');
            }

        }else{
            return "人数已满，不能再申请了！";
        }


    }
}