<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
   

    use AuthenticatesUsers;

   
     protected $redirectTo;

    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 1:
            $this->redirectTo = 'admin/dashboard';
            return $this->redirectTo;
                break;
          
            case 2:
                $this->redirectTo = 'employee/dashboard';
                return $this->redirectTo;
                break;

                case 3:
                $this->redirectTo = 'manager/dashboard';
                return $this->redirectTo;
                break;

           
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
