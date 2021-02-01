<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::middleware('auth:sanctum')->post('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/fxrate', 'App\Http\Controllers\FxRate\FxRateController@getFxRate');