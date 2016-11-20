<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController',
]);*/

Route::resource('inicio','ComercioListadoController');

Route::resource('comercio', 'ComercioListadoController');

Route::resource('reportes', 'ReportesController');

Route::resource('personas', 'PersonasController');


Route::get('productos/{id}','ComercioListadoController@productos');
Route::get('producto/create/{id}','ListadoProductosController@crear');

Route::resource('producto', 'ListadoProductosController');