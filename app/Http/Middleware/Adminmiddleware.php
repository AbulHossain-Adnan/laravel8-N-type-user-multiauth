<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Adminmiddleware
{
    
    public function handle(Request $request, Closure $next)
    { 

        if (Auth::check() && Auth::user()->role == 1) {
           return $next($request);
        }
        else{
            return back();
        }
        
    }
}
