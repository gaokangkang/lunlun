<?php

namespace App\Http\Controllers\Teacher;

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
    public function message(){   //查看消息列表
        $session = Session::get('teacher_name');
        $teacher_id = DB::table('teacher')->where('teacher_name','like',$session)->value('teacher_id');
        $rul = DB::table('tnews')->where([['tnews_status','like',0],['teacher_id','like',$teacher_id],])->orderBy('tnews_id', 'desc')->get();
        $rul1 = DB::table('tnews')->where([['tnews_status','like',1],['teacher_id','like',$teacher_id],])->orderBy('tnews_id', 'desc')->get();
        return view('teachernews.message',['rul'=>$rul,'rul1'=>$rul1]);
    }

    public function delete($tnews_id){   //删除消息
        $delete = DB::table('tnews')->where('tnews_id', 'like',$tnews_id)->delete();
        if($delete){
            return redirect('teacher/message');
        }else{
            return "删除失败！";
        }

    }

    public function content($tnews_id){    //查看消息内容
        $rul = DB::table('tnews')->where('tnews_id','like',$tnews_id)->get();
        DB::update("update ll_tnews set tnews_status = 1 where tnews_id = $tnews_id");
        //dd($a);
        return view('teachernews.content',['rul'=>$rul]);
    }

    public function news()   //发送消息
    {
        if($input = Input::all()){
            $time = date('Y-m-d,H:i:s',time());
            $session = Session::get('teacher_name');
            //dd($session);
            if($input['student_name']=='所有人'){
                $teacher_id = DB::table('teacher')->where('teacher_name','like',$session)->value('teacher_id');
                $list = DB::table('teacher-student')->where('teacher_id','like',$teacher_id)->get();
               // dd($list);
                foreach($list as $value){
                    $insert = DB::table('snews')->insert([
                        'student_id'=>$value->student_id,
                        'snews_name'=>$input['snews_name'],
                        'snews_content'=>$input['snews_content'],
                        'snews_time'=>$time,
                        'snews_status'=> 0,
                    ]);
                }
            }elseif ($input['student_name']=='全体同学'){
                $teacher_college = DB::table('teacher')->where('teacher_name','like',$session)->value('teacher_college');
                $list = DB::table('student')->where('student_college','like',$teacher_college)->get();
                foreach($list as $value){
                    $insert = DB::table('snews')->insert([
                        'student_id'=>$value->student_id,
                        'snews_name'=>$input['snews_name'],
                        'snews_content'=>$input['snews_content'],
                        'snews_time'=>$time,
                        'snews_status'=> 0,
                    ]);
                }

            }else{
                $student_id = DB::table('student')->where('student_name','like',$input['student_name'])->value('student_id');
                $insert = DB::table('snews')->insert([
                    'student_id'=>$student_id,
                    'snews_name'=>$input['snews_name'],
                    'snews_content'=>$input['snews_content'],
                    'snews_time'=>$time,
                    'snews_status'=> 0,
                ]);
            }

            if($insert){
                return redirect('teacher/message');
            }else{
                return "发送失败!";
            }
            //dd($time);
        }else{
            return view('teachernews/news');
        }

    }
}