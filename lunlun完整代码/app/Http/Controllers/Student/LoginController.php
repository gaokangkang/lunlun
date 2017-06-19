<?php

namespace App\Http\Controllers\Student;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends CommonController
{
    public function register()
    {

        if($input=Input::all()){
            $student_name = $input['student_name'];
            $student_email = $input['student_email'];
            $student_psd = $input['student_psd'];
            $student_repsd = $input['student_repsd'];
            $student_select = $input['select'];
            // dd($student_name);
            if( $student_name && $student_email && $student_psd && $student_repsd && $student_select ){
                $a = '@';
                $is_a = explode($a,$student_email);
                if($student_psd == $student_repsd && count($is_a)>1){
                    $student_pwd= Crypt::encrypt($input['student_psd']);
                    //dd($student_pwd);
                    $student = array('student_name'=>$student_name,'student_pwd'=>$student_pwd,'student_img'=>'33.png','student_email'=>$student_email,'student_college'=>$student_select);
                    //dump($student);
                    $stu = DB::table('student')->insert($student);
                    /*if($stu){
                        echo 'ok';
                    }else{
                        echo 'no ok';
                    }*/
                    return view('studentlogin.jump')->with([
                        'message'=>'注册成功，请登录！',
                        'url' =>'login',
                        'jumpTime'=>3,
                    ]);


                }else{
                    echo 'no ok';
                }
            }else{
                echo 'no ok';
            }
        }else {
            return view('studentlogin.register');
        }

    }

    public function login()
    {
        if($input = Input::all()){
            //$role = 0;
            $name = $input['student_name'];
            $pwd = $input['student_pwd'];
            $last = last($input);
            //dd($last);
            if($last != '学生' && $last != '教师'){
                return back()->with('msg','要选择是学生还是老师!');
            }else{
                $role = $input['role'];
                if($name && $pwd && $role){
                    if($role == '学生'){
                        //学生登陆
                        $stu = DB::table('student')->where('student_name','like',$name)->get();
                        if($stu){
                            foreach($stu as $value){
                                $student_password = Crypt::decrypt($value->student_pwd);
                                if($student_password==$pwd){
                                    Session::put('student_name',$name);
                                    return redirect('student/index');
                                }else{
                                    return back()->with('msg','密码错误!');
                                }
                            }
                        }else{
                            return back()->with('msg','用户名错误!');
                        }
                    }elseif ($role == '教师'){
                        //教师登陆
                        $tea = DB::table('teacher')->where('teacher_name','like',$name)->get();
                        if($tea){
                            $tea_pwd = DB::table('teacher')->where('teacher_name','like',$name)->value('teacher_pwd');
                            $teacher_pwd = $tea_pwd;
                            if($teacher_pwd == $pwd){
                                Session::put('teacher_name',$name);
                                //dd(Session::get('teacher_name'));
                                return redirect('teacher/index');
                            }else{
                                return back()->with('msg','密码错误！');
                            }
                        }else{
                            return back()->with('msg','用户名错误！');
                        }
                    }
                }else{
                    return back()->with('msg','信息不能为空！');
                }
            }


        }else{
            session(['student_name'=>null]);
            session(['teacher_name'=>null]);
            return view('studentlogin.login');
        }

    }



}