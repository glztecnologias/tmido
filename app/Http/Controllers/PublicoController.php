<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion as Publicacion;
use App\Categoria as Categoria;
use App\Cuenta_usuario as Cuenta_usuario;

class PublicoController extends Controller
{

    public function index()
    {

      $publicaciones = Publicacion::tomar_nueve_mas_visitados();
      $mas_val = Publicacion::tomar_dos_mas_valorados();
      $mas_megusta = Publicacion::tomar_dos_mas_me_gusta();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('publicaciones.index', compact('publicaciones','categorias','usuarios_ranking','mas_val','mas_megusta'));

    }

    public function show($id)
    {
      //Pasar esto al Modelo...
      $publicacion = Publicacion::find($id);
     return view('ficha.index', compact('publicacion'));
     //  return $publicacion;

    }

    public function muestra_registro()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('registro.index', compact('categorias','usuarios_ranking'));
    }
}
