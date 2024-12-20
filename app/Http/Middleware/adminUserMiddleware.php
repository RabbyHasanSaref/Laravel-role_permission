<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class adminUserMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if(!empty(Auth::check())){
            return $next($request);
        }
        else{
            Auth::logout();
            return redirect(url(''));
        }
    }
}
