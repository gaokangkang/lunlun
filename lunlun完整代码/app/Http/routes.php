<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web','student.login']],function(){
    Route::get('student/index','Student\StudentController@index');
    Route::any('student/setting','Student\StudentController@setting');
    Route::get('student/destroy/{paper_id}','Student\StudentController@destroy');
    Route::any('student/uppaper','Student\StudentController@uppaper');
    Route::any('student/lunwen/{paper_id}','Student\StudentController@lunwen');
    Route::any('student/download/{paper_id}','Student\StudentController@download');
    Route::any('student/tdownload/{paper_id}','Student\StudentController@tdownload');
    Route::any('student/delete','Student\LoginController@delete');
    Route::any('student/checkpaper','Student\StudentController@checkpaper');
    Route::any('student/pwd','Student\StudentController@pwd');
    Route::any('student/up','Student\StudentController@up');
    Route::any('student/teacher','Student\TeacherController@teacher');
    Route::any('student/issue/{teacher_id}','Student\TeacherController@issue');
    Route::any('student/sure/{issue_id}','Student\TeacherController@sure');
    Route::get('student/message','Student\MessageController@message');
    Route::get('student/content/{snews_id}','Student\MessageController@content');
    Route::any('student/news','Student\MessageController@news');
    Route::get('student/dele/{snews_id}','Student\MessageController@dele');



});



Route::group(['middleware' => ['web']], function () {
    Route::any('student/register','Student\LoginController@register');
    Route::any('student/login','Student\LoginController@login');
});




Route::group(['middleware' => ['web','teacher.login']],function(){
    Route::any('teacher/index','teacher\TeacherController@index');
    Route::any('teacher/edit','teacher\TeacherController@edit');
    Route::any('teacher/update','teacher\TeacherController@update');
    Route::any('teacher/add','teacher\TeacherController@add');
    Route::get('teacher/news','teacher\TeacherController@news');
    Route::any('teacher/tuppaper/{paper_id}','teacher\TeacherController@tuppaper');
    Route::get('teacher/lists','teacher\TeacherController@lists');
    Route::any('teacher/download/{paper_id}','teacher\TeacherController@download');
    Route::get('teacher/lunwen/{student_name}','teacher\TeacherController@lunwen');
    Route::get('teacher/destory/{paper_id}','teacher\TeacherController@destory');
    Route::get('teacher/tlunwen/{paper_id}','teacher\TeacherController@tlunwen');
    Route::get('teacher/tdownload/{paper_id}','teacher\TeacherController@tdownload');
    Route::any('teacher/comment/{paper_id}','teacher\TeacherController@comment');
    Route::get('teacher/logo','teacher\TeacherController@logo');

    Route::any('teacher/message','teacher\MessageController@Message');
    Route::any('teacher/content/{tnews_id}','teacher\MessageController@content');
    Route::any('teacher/news','teacher\MessageController@news');
    Route::any('teacher/delete/{tnews_id}','teacher\MessageController@delete');

    Route::any('teacher/issue','teacher\IssueController@issue');
    Route::any('teacher/upissue','teacher\IssueController@upissue');
    Route::any('teacher/student/{issue_id}','teacher\IssueController@student');
    Route::any('teacher/add/{student_name}{issue_id}','teacher\IssueController@add');
    Route::any('teacher/back/{student_name}{issue_id}','teacher\IssueController@back');

});





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
