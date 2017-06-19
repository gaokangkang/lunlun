<?php

namespace App\Http\Middleware;

use Closure;

class TeacherLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!session('teacher_name')){
        return redirect('student/login');
        }
        return $next($request);
    }
}
