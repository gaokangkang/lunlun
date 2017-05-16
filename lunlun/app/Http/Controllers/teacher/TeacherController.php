<?php


  namespace App\Http\Controllers\teacher;

  use App\Http\Model\Teacher;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Session;

  class TeacherController extends CommonController
  {
  	public function index()
  	{
  		return view('teacherhome.index');
  	}


  	//密码修改页
    public function edit(Request $request)
    {
      if ($input = Input::all()) {
           $a = Session::get('teacher');
           $teachers = Teacher::where('teacher_name','=',$a)->get();
           if ($input['mpass'] ==  $teachers[0]['teacher_pwd'])
           {
               $teachers = DB::table('teacher')->where('teacher_name','=',$a)->update(
                   ['teacher_pwd'=>$input['newpass']]
               );

           }else{
                return back()->with('msg','原密码错误');
           }
      }


      return view('teacheredit/edit');
    }
    //老师个人信息修改页
    public function add()
    {

        return view('teacheredit/add');
    }
      //老师个人信息页
    public function update()
    {
        $a = Session::get('teacher');
        $Teacher = new Teacher();


        return view('teacheredit/update');
    }
    public function logo()
    {

      return view('teacherhome/logo');
    }
    public function news()
    {
      return view('teachernews/news');
    }
    public function lists()
    {
      return view('teacherhome/lists');
    }
    public function lunwen()
    {
      return view('teacherhome/lunwen');
    }
    public function content()
    {
      return view('teacherhome/content');
    }


  }