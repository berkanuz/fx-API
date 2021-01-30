<?php

namespace App\Http\Controllers\Auth\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Redirect;
use Session;

class HomeController extends Controller
{
    public function redirectHome(Request $request)
    {
            return Redirect::to('/');
    }
}
