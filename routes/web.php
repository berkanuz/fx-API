<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('checkLogin')->get('/', function () {
    return view('home');
}); 

//Route::middleware('checkLogin')->get('/', 'App\Http\Controllers\Auth\Home\HomeController@redirectHome');


Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();


//Route::middleware('checkToHome')->get('/login', 'App\Http\Controllers\Auth\LoginController@getuser');
/*Route::middleware('checkToHome')->get('/login', function () {
    return view('home');
}); */
