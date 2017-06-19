<?php


  namespace App\Http\Controllers\teacher;
  use Illuminate\Http\Request;
  use App\Http\Requests;
  use App\Http\Controllers\Controller;


  class CommonController extends Controller
  {
     public function login()
     {

         return view('teacherlogin/login');
     }
  }