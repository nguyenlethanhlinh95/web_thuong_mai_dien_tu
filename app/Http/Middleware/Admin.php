<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
//        if(Auth::check() && Auth::user()->isAdmin()){
//            return $next($request);
//        }
//        return redirect()->route('login');


        if (Auth::check()) {
            //check admin login
            $user = Auth::user();
            if ($user->admin == 1) {
                return $next($request);
            } else {
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }
        //return $next($request);
    }
}
