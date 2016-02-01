<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion as Publicacion;
use App\Categoria as Categoria;
use App\Cuenta_usuario as Cuenta_usuario;
use App\Me_gusta as Me_gusta;
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
      $categorias = Categoria::All();
      $publicacion = Publicacion::find($id);
      $otras_pub_categoria = Publicacion::tomar_misma_categoria($publicacion->categoria_id,$id);
    if( $publicacion->competencia_id == null)
    {
      $competidores = null;
    }
    else
    {
      $competidores = Publicacion::tomar_misma_competencia($publicacion->competencia_id);
    }

    if($publicacion->estado->nombre=="activo")
    {
       return view('ficha.index', compact('publicacion','categorias','competidores','otras_pub_categoria'));
    }
    else
    {
       return redirect('/');
    }

    }

    public function muestra_registro()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('registro.index', compact('categorias','usuarios_ranking'));
    }


    public function muestra_proyecto()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('t-mido.index', compact('categorias','usuarios_ranking'));
      //return view('t-mido.index');
    }

    public function muestra_noticias()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('noticias.index', compact('categorias','usuarios_ranking'));
    }

    public function muestra_contacto()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('contacto.index', compact('categorias','usuarios_ranking'));
    }
    public function muestra_ranking()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('ranking.index', compact('categorias','usuarios_ranking'));
    }
    public function muestra_politicas()
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('politicas.index', compact('categorias','usuarios_ranking'));
    }

    public function muestra_cuenta(Request $request) //Validar USUARIO ****
    {
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();

      $usuario = session('usuario');  //Validar USUARIO ****
      $request->session()->put('usuario', $usuario); //Validar USUARIO ****

      return view('cuenta.index', compact('categorias','usuarios_ranking'));

    }

    public function votar_megusta(Request $request)
    {
    $usuario = session('usuario');
    $request->session()->put('usuario', $usuario);

    if($usuario)
    {
        $check_votacion = Me_gusta::comprobar_votacion($request->idp,$usuario->id);

        if($check_votacion)
        {
            if( $check_votacion->si == 1 AND $request->op == 'si')
              {
                return "Lo sentimos, ya haz votado anteriormente!...";
              }
            elseif($check_votacion->no == 1 && $request->op == 'no')
            {
              return "Lo sentimos, ya haz votado anteriormente!...";
            }
            elseif($check_votacion->si == 1 AND $request->op == 'no')
            {
              Me_gusta::cambia_a_nomegusta($request->idp,$usuario->id);
              return "cambio de voto satisfactoriamente!...";
            }
            elseif($check_votacion->no == 1 AND $request->op == 'si')
            {
              Me_gusta::cambia_a_megusta($request->idp,$usuario->id);
              return "cambio de voto satisfactoriamente!...";
            }
        }
        else
        {
         if($request->op=='si')
           {
             Me_gusta::inserta_megusta($request->idp,$usuario->id);
           }
        else
          {
            Me_gusta::inserta_nomegusta($request->idp,$usuario->id);
          }
          return "Gracias por tu voto!";
        }
      }
    else
    {
      return "Debes acceder como usuario para votar!...";
    }





    }

    public function votar_nomegusta(Request $request)
    {


    }


    public function busqueda($categoria, $palabra_clave = null)
    {
      $categorias = Categoria::All();
      $cat_id = Categoria::trae_id($categoria);


      if($cat_id == "todas"){
            $id_cat = 0;
            $publicaciones = Publicacion::buscar_por_categoria($id_cat,$palabra_clave);
            $cat_id == "todas";
          }
      else
          {
            $cat_idx=$cat_id->first();
            $id_cat = (int)$cat_idx->id;
            $publicaciones = Publicacion::buscar_por_categoria($id_cat,$palabra_clave);
            $bol_pub=$publicaciones->isEmpty();

          }

        return view('directorio.index', compact('publicaciones','categorias','cat_id'));
    }


}
