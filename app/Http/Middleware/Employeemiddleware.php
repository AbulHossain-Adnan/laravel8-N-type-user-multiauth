<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Employeemiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
         if (Auth::check() && Auth::user()->role == 2) {
           return $next($request);
        }
        else{
            return back();
        }
        
        
        
    }
}
