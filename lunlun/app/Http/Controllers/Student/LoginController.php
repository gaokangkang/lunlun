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
            dd($input);

        }else {
            return view('studentlogin.register');
        }

    }

    public function login()
    {
        if($input = Input::all()){
            $student_name = $input['student_name'];
            $student_pwd = $input['student_pwd'];

            $rsf = DB::table('student')->where('student_name','like',"$student_name")->get();
            if($rsf){
                foreach($rsf as $value){
                    $student_password = Crypt::decrypt($value->student_pwd);
                    if($student_password==$student_pwd){
                        Session::put('student_name',$student_name);

                        return redirect('student/index');
                    }else{
                        echo 'no ok';
                    }
                }

            }else{
                echo 'no ok';
            }

        }else{

            return view('studentlogin.login');
        }

    }


}