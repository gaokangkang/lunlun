<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Model\Paper;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Array_;
use Storage;
use App\Http\Requests;

class IssueController extends CommonController
{
    public function issue(){

        $session = Session::get('teacher_name');
        $teacher_id = DB::table('teacher')->where('teacher_name','like',$session)->value('teacher_id');
        $rul = DB::table('issue')->where('teacher_id','like',$teacher_id)->get();
        //dd($rul);
        return view('teacherissue.issue',['rul'=>$rul]);
    }

    public function upissue(){
        $session = Session::get('teacher_name');
        $teacher_id = DB::table('teacher')->where('teacher_name','like',$session)->value('teacher_id');
        if($input=Input::all()){
            $insert = DB::table('issue')->insert([
                'teacher_id'=>$teacher_id,
                'issue_name'=>$input['issue_name'],
                'issue_total'=>$input['issue_total'],
                'issue_jianjie'=>$input['issue_jianjie'],
            ]);
            if($insert){
                return redirect('teacher/issue');
            }else{
                return "添加课题失败";
            }
        }else{
            return view('teacherissue.upissue');
        }

    }

    public function student($issue_id){
        $list = DB::table('student-issue')->where('issue_id','like',$issue_id)->get();
        $total = DB::table('issue')->where('issue_id','like',$issue_id)->value('issue_total');
        $count = DB::table('teacher-student')->where('issue_id','like',$issue_id)->count();
        //dd($list);
        $issue = DB::table('issue')->where('issue_id','like',$issue_id)->get();
        $array = array();
        $array1 = array();
        $array2 = array();
        $array3 = array();
        $i = 0;
        $j = 0;
        foreach ($list as $value){
            $ts_id = DB::table('teacher-student')->where('student_id','like',$value->student_id)->value('ts_id');
            //dd($ts_id);
            $student_name = DB::table('student')->where('student_id','like',$value->student_id)->value('student_name');
            $student_img = DB::table('student')->where('student_id','like',$value->student_id)->value('student_img');
            if($ts_id!=null){
                $array[$i]=$student_name;
                $array2[$i] = $student_img;
                $i++;
            }else{
                $array1[$j]=$student_name;
                $array3[$j]=$student_img;
                $j++;
            }

        }
        //dd($array3);

        return view('teacherissue.student',['array'=>$array,
            'array1'=>$array1,
            'array2'=>$array2,
            'array3'=>$array3,
            'i'=>$i,'j'=>$j,
            'issue_id'=>$issue_id,
            'issue'=>$issue,
            'count'=>$count,
            'total'=>$total,
        ]);
    }

    public function add($student_name,$issue_id){
        //dd($issue_id);
        $time = date('Y-m-d,H:i:s',time());
        $student_id = DB::table('student')->where('student_name','like',$student_name)->value('student_id');
        $teacher_id = DB::table('issue')->where('issue_id','like',$issue_id)->value('teacher_id');
        $total = DB::table('issue')->where('issue_id','like',$issue_id)->value('issue_total');
        $count = DB::table('teacher-student')->where('issue_id','like',$issue_id)->count();
        if($count<$total){
            $insert = DB::table('teacher-student')->insert([
                'teacher_id'=>$teacher_id,
                'student_id'=>$student_id,
                'issue_id'=>$issue_id,
            ]);
            $insert1 = DB::table('snews')->insert([
                'student_id'=>$student_id,
                'snews_name'=>"课题",
                'snews_content'=>"您选择的课题已经通过了老师的审核，请及时查看！",
                'snews_time'=>$time,
                'snews_status'=> 0,
            ]);
            DB::table('student-issue')->where([['student_id','like',$student_id],['issue_id','!=',$issue_id]])->delete();


            if($insert && $insert1){
                return redirect("teacher/student/$issue_id");
            }else{
                return "审核失败，请重新审核！";
            }
        }else{
            return "此课题人数已满，请通知这位学生重新选择课题！";
        }
    }

    public function back($student_name,$issue_id){
        $time = date('Y-m-d,H:i:s',time());
        $student_id = DB::table('student')->where('student_name','like',$student_name)->value('student_id');
        //dd($student_id);
        //dd($issue_id);
        $delete = DB::table('student-issue')->where([['student_id','like',$student_id],['issue_id','like',$issue_id]])->delete();
        $insert = DB::table('snews')->insert([
            'student_id'=>$student_id,
            'snews_name'=>"退回课题",
            'snews_content'=>"您选择的课题人数已满，请及时选择其他课题！",
            'snews_time'=>$time,
            'snews_status'=> 0,
        ]);
        if($delete && $insert){
            return redirect("teacher/student/$issue_id");
        }else{
            return "退回失败";
        }

    }

}