<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',array('uses'=>'HomeController@showLogin'));
Route::post('login',array('uses'=>'HomeController@doLogin'));
Route::get('logout',array('uses'=>'HomeController@doLogout'));
