<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;

use Closure;

class UserMiddleware
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
        if(empty(Session::has('userlogin'))){
            return redirect('/home');
        }
        return $next($request);
    }
}
