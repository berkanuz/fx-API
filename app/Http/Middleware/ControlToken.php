<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use PersonalAccessToken;

class ControlToken
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
        $userToken = Session::get('api-token');
        
    
        $userToken = User::where('api-token', $userToken)->first();
    
        if ( Hash::check($userToken, $user->userToken)) {

            return Redirect::to( '/logout');
        }


        return $next($request);
    }
}
