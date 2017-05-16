<?php


namespace App\Http\Controllers\teacher;


use App\Http\Model\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends CommonController
{
    public function login()
    {
        if ($input = Input::all()){
            //  dd($input);
            $name = $input['name'];
            $password = $input['password'];
            $teachers = DB::table('teacher')->whereRaw('teacher_name = ? and teacher_pwd = ?',[$name,$password])->get();
            if (!$teachers)
                //$teacher = teacher::first();
                //if($teacher->teacher_name != $input['name'] || $teacher->teacher_pwd != $input['password'] )
            {
                return back()->with('msg','用户名或者密码错误');
            }
           Session::put('teacher',$name);
            return redirect('teacher/index');

        }else{
            session(['teacher'=>null]);
            return view('teacherlogin/login');
        }
    }
}