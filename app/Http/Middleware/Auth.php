<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Redirect;
use Illuminate\Support\Facades\Hash;


class Auth
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
        $email = Session::get('email');
        $password = Session::get('password');
    
        $user = User::where('email', $email)->first();
    
        if (! $user || ! Hash::check($password, $user->password)) {

            return Redirect::to( '/login');
        }

        return $next($request);
    }
}
