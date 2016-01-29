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


Route::get('/publicaciones/busqueda/{categoria}/{palabra_clave?}', 'PublicoController@busqueda');
//Route::get('/publicaciones/busqueda/{categoria}', 'PublicoController@busqueda');

Route::resource('/admin/publicaciones', 'PublicacionController');
Route::resource('/admin', 'AdminController');

Route::get('/t-mido','PublicoController@muestra_proyecto');
Route::get('/noticias','PublicoController@muestra_noticias');
Route::get('/contacto','PublicoController@muestra_contacto');
Route::get('/ranking','PublicoController@muestra_ranking');
Route::get('/politicas','PublicoController@muestra_politicas');
Route::get('/cuenta','PublicoController@muestra_cuenta');
// Authentication routes...

Route::post('/ingreso/login', 'IngresoController@postLogin');
Route::get('/ingreso/logout', 'IngresoController@getLogout');

// Registration routes...
Route::get('/ingreso/register', 'IngresoController@getRegister');
Route::post('/ingreso/register', 'IngresoController@postRegister');

Route::get('/publicaciones/{id}', ['middleware' => 'VisitaPublicacion', 'uses' => 'PublicoController@show']);


//rutas me gusta (para opcion si/no)
Route::post('/megusta','PublicoController@votar_megusta');
