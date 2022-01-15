<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Managermiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 3) {
           return $next($request);
        }
        else{
            return back();
        }
    }
}
