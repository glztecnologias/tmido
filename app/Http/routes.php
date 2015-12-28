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
});

Route::get('/publicaciones', function()
{
  $publicaciones = App\Publicacion::orderBy('contador', 'desc')->take(9)->get();
  return view('publicaciones.index', compact('publicaciones'));
});

Route::get('/publicaciones/{id}', function($id)
{
  $publicacion = App\Publicacion::find($id);
  return $publicacion;
});

Route::resource('/admin/publicaciones', 'PublicacionController');

Route::resource('/admin', 'AdminController');
