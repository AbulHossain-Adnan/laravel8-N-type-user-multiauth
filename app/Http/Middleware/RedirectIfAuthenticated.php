<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
   
    public function handle(Request $request, Closure $next,$guard=null)
    {
           if (Auth::check() && Auth::user()->role== 1) {
            return redirect()->route('admin.dashboard');
         
        }
        elseif (Auth::check() && Auth::user()->role==2) {
            return redirect()->route('employee.dashboard');
        }
        else {
            return $next($request);
        }
    }
}
