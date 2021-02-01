<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
	if (Session::get('api-token')){
    	return view('home');	
	}
	else{
		return Redirect::to( '/login');
	}
}); 

Route::get('/logout', function (Request $request) {
	if (Session::get('api-token')){
		Redirect::to( '/handleLogout')->header('Authorization', 'Bearer '.Session::get('api-token'));
	}
	else{
		return Redirect::to( '/login');
	}
}); 

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Auth::routes();
