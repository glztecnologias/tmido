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



//ADMINISTACION ********************************************************

Route::resource('/admin/publicaciones', 'PublicacionController');
Route::resource('/admin/categorias', 'CategoriaController');

Route::resource('/admin/competencias', 'CompetenciaController');
Route::resource('/admin/estados', 'EstadoController');
Route::resource('/admin/tipo_recursos', 'Tipo_recursoController');
Route::resource('/admin/recursos','RecursoController');
Route::resource('/admin/tipo_evaluacion', 'Tipo_evaluacionController');



Route::resource('/admin/evaluacion', 'EvaluacionController');

Route::resource('/admin/evaluacion/{id?}/{id_com?}/create/','EvaluacionController@create');





Route::resource('/admin', 'AdminController');
// ********************************************************************



//PUBLICAS ************************************************************
Route::get('/', function () {return redirect('publicaciones');});
Route::get('/registro','PublicoController@muestra_registro');
Route::get('/publicaciones','PublicoController@index');

Route::get('/publicaciones/busqueda/{categoria}/{palabra_clave?}', 'PublicoController@busqueda');
//Route::get('/publicaciones/busqueda/{categoria}', 'PublicoController@busqueda');

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

//ruta valorar general ficha (id y nota)
Route::post('/valorar','PublicoController@votar_valorar');

//ruta comentar general ficha (idp,id usuario, comentario)
Route::post('/comentar','PublicoController@comentar');

//ruta comentar comentario ficha (idp,id usuario, comentario)
Route::post('/megustacomentario','PublicoController@votar_megusta_comentario');

//ruta evaluar items  ficha ()
Route::post('/evaluar_items','PublicoController@evaluar_items');


//ruta para validar la creacion de cuenta con el link enviado al correo
Route::get('/verificacion_correo/{code}','IngresoController@verificacion_correo');


Route::get('/evaluacion/{id_publicacion}','PublicoController@show_evaluacion_publicacion');

Route::get('/evaluacion/{id_publicacion}/competencia/{id_competencia}','PublicoController@show_evaluacion_competencia');

Route::get('/graficos/{id_publicacion}/competencia/{id_competencia?}','PublicoController@show_graficos_publicacion');


// ********************************************************************
