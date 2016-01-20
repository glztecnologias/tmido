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
    return redirect('publicaciones');
  //  return view('inicio',['nombre'=>'Daniel']);
  //return view('registro.index',);
});
Route::get('/registro','PublicoController@muestra_registro');

Route::get('/publicaciones','PublicoController@index');

Route::get('/publicaciones/{id}', ['middleware' => 'VisitaPublicacion', 'uses' => 'PublicoController@show']);

Route::resource('/admin/publicaciones', 'PublicacionController');

Route::resource('/admin', 'AdminController');

// Authentication routes...

Route::post('ingreso/login', 'IngresoController@postLogin');
Route::get('ingreso/logout', 'IngresoController@getLogout');

// Registration routes...
Route::get('ingreso/register', 'IngresoController@getRegister');
Route::post('ingreso/register', 'IngresoController@postRegister');
