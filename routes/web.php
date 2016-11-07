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

Route::resource('producto', 'ListadoProductosController');

//Route::get('inicio', 'ComercioListadoController@index');

//Route::get('comercio/nuevo','ComercioListadoController@create');

//Route::post('comercio/crear_nuevo', 'ComercioListadoController@store');

//Route::get('comercio/{id}/listado','ListadoProductosController@show');

Route::resource('comercio/{id}','ComercioListadoController@show');