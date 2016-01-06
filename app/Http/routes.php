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

  $mas_val = App\Publicacion::orderBy('valoracion', 'desc')->take(2)->get();
  $mas_megusta = App\Publicacion::orderBy('neto_megusta', 'desc')->take(2)->get();
  
  $categorias = App\Categoria::All();
  $usuarios_ranking = App\Cuenta_usuario::orderBy('puntaje_participa', 'desc')->take(3)->get();

  return view('publicaciones.index', compact('publicaciones','categorias','usuarios_ranking','mas_val','mas_megusta'));
});

Route::get('/publicaciones/{id}', function($id)
{
  $publicacion = App\Publicacion::find($id);
 return view('ficha.index', compact('publicacion'));
//  return $publicacion;

});

Route::resource('/admin/publicaciones', 'PublicacionController');

Route::resource('/admin', 'AdminController');
