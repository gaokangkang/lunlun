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


Route::group(['middleware' => ['web']], function () {

    Route::get('student/index','Student\StudentController@index');
    Route::get('student/teacher','Student\StudentController@teacher');
    Route::get('student/message','Student\StudentController@message');
    Route::get('student/setting','Student\StudentController@setting');
    Route::any('student/uppaper','Student\StudentController@uppaper');
    Route::any('student/login','Student\LoginController@login');
    Route::any('student/register','Student\LoginController@register');

});






Route::group(['middleware' => ['web']],function(){
    Route::any('teacher/login', ['uses' => 'teacher\LoginController@login']);
});

Route::group(['middleware' => ['web','teacher.login']],function(){
    Route::any('teacher/index','teacher\TeacherController@index');
    Route::any('teacher/edit','teacher\TeacherController@edit');
    Route::any('teacher/update','teacher\TeacherController@update');
    Route::get('teacher/add','teacher\TeacherController@add');
    Route::get('teacher/logo','teacher\TeacherController@logo');
    Route::get('teacher/news','teacher\TeacherController@news');
    Route::get('teacher/lists','teacher\TeacherController@lists');
    Route::get('teacher/lunwen','teacher\TeacherController@lunwen');
    Route::get('teacher/content','teacher\TeacherController@content');

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
