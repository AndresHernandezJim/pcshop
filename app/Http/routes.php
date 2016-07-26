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
//rutas de tipo usuario
get('/user', 'UserController@index');
get('/logoutc', 'UserController@logout');
//RUTAS ADMIN
/*get('/admin', 'AdminController@index');
get('/logouta', 'AdminController@logout');
get('/acerca',function(){return view('website.acerca');});
get('/administrador/categorias', function(){return view('admin.categorias');});
get('/administrador/productos',function(){return view('admin.productos');});
get('/administrador/ventas',function(){return view('admin.ventas');});
get('/administrador/usuarios',function(){return view('admin.usuarios');});
get('/administrador/mensajes',function(){return view('admin.mensajes');});*/

Route::group(['middleware' => 'Admin'], function(){
	get('/admin', 'AdminController@index');
	get('/logouta', 'AdminController@logout');
	get('/acerca',function(){return view('website.acerca');});
	get('/administrador/categorias', function(){return view('admin.categorias');});
	get('/administrador/productos',function(){return view('admin.productos');});
	get('/administrador/ventas',function(){return view('admin.ventas');});
	get('/administrador/usuarios',function(){return view('admin.usuarios');});
	get('/administrador/mensajes',function(){return view('admin.mensajes');});
	
});


Route::group(['middleware' => 'Cliente'], function(){
	get('/user', 'UserController@index');
	get('/logoutc', 'UserController@logout');
	
});

