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

class MessageController extends CommonController
{
    public function message()   //查看消息
    {
        $session = Session::get('student_name');
        $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $rul = DB::table('snews')->where([['snews_status','like',0],['student_id','like',$student_id],])->orderBy('snews_id', 'desc')->get();
        $rul1 = DB::table('snews')->where([['snews_status','like',1],['student_id','like',$student_id],])->orderBy('snews_id', 'desc')->get();
        return view('studentnews.message',['rul'=>$rul,'rul1'=>$rul1,'student'=>$student]);
    }

    public function content($snews_id){   //查看消息内容
        $session = Session::get('student_name');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $rul = DB::table('snews')->where('snews_id','like',$snews_id)->get();
        DB::update("update ll_snews set snews_status = 1 where snews_id = $snews_id");

        return view('studentnews.content',['rul'=>$rul,'student'=>$student]);
    }

    public function dele($snews_id){//删除消息
        $delete = DB::table('snews')->where('snews_id', 'like',$snews_id)->delete();
        if($delete){
            return redirect('student/message');
        }else{
            return "删除失败！";
        }
    }

    public function news(){ //发送消息
        $session = Session::get('student_name');
        $student_id = DB::table('student')->where('student_name','like',$session)->value('student_id');
        $student = DB::table('student')->where('student_name','like',$session)->get();
        $teacher_id = DB::table('teacher-student')->where('student_id','like',$student_id)->value('teacher_id');
        if($teacher_id != null){
            $teacher_name = DB::table('teacher')->where('teacher_id','like',$teacher_id)->value('teacher_name');
            if($input = Input::all()){
                //dd($input);
                $time = date('Y-m-d,H:i:s',time());
                $insert = DB::table('tnews')->insert([
                    'teacher_id'=>$teacher_id,
                    'tnews_name'=>$input['tnews_name'],
                    'tnews_content'=>$input['tnews_content'],
                    'tnews_time'=>$time,
                    'tnews_status'=> 0,
                ]);

                if($insert){
                    return redirect('student/message');
                }else{
                    return "发送失败!";
                }
            }else{
                return view('studentnews.news',['teacher_name'=>$teacher_name,'student'=>$student]);
            }
        }else{
            return '还没有确定课题，不能发送消息';
        }


    }

}