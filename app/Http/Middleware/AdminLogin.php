<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLogin
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
        if(Auth::check()){
            if(Auth::user()->idGroup ==1){
                return redirect('admin/index');
            }else {
                return redirect('/');
            }
            return $next($request);
        }else {
            return redirect('Dang-Nhap');
        }
        
    }
}
