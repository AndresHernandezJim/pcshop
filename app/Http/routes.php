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

Route::get('/', function () {return view('/website/index');});
get('/login',function(){return view('/website/login');});
get('/registro', function(){return view('/website/singup');});
post('/registrar','loginController@store');
post('/login2','loginController@index');