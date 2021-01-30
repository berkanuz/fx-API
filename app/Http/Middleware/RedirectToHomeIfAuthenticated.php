<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;


;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RedirectToHomeIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guest())
        {
            return Redirect::to( '/');
    
        }
        else {
            
            return Redirect::to( '/login');
        }
        //return $next($request);

    }
}
