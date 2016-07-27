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

Route::group(['middleware' => 'Admin'], function(){
	get('/admin', 'AdminController@index');
	get('/logouta', 'AdminController@logout');
	get('/acerca',function(){return view('website.acerca');});
	get('/administrador/categorias', function(){return view('admin.categorias');});
	get('/administrador/productos',function(){return view('admin.productos');});
	get('/administrador/ventas',function(){return view('admin.ventas');});
	get('/administrador/usuarios',function(){return view('admin.usuarios');});
	get('/administrador/mensajes',function(){return view('admin.mensajes');});
	//vista para insertar nueva categoria
	get('/administrador/new/categoria',function(){return view('admin.newCategoria');});
	//ruta utilisada en ajax para mostrar categorias
	get('/administrador/showcat', 'AdminController@showCat');
	//ruta para inserar nueva categoria
	post('/administrador/new/categoria2', 'AdminController@newCategoria');
	//ruta que muesta las subcategorias de x categoria
	get('/admin/subc/{id}','AdminController@subc');
	//ruta utilizada para consulta ajax de subcategorias
	get('/administrador/showsubcat/{id}','AdminController@showsubCat');
	//ruta para abrir la vista de insersion de subcategoria, enviando los datos de la categoria padre
	get('/administrador/new/subcat/{id}', 'AdminController@newsubcat');
	//ruta para insertar una nueva subcategoria
	post('/administrador/new/subcat2/{id}', 'AdminController@newsubcat2');

	
});


Route::group(['middleware' => 'Cliente'], function(){
	get('/user', 'UserController@index');
	get('/logoutc', 'UserController@logout');
	
});

