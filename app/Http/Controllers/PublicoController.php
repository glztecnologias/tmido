<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion as Publicacion;
use App\Categoria as Categoria;
use App\Cuenta_usuario as Cuenta_usuario;
use App\Me_gusta as Me_gusta;
use App\Valoracion as Valoracion;
use App\Comentario as Comentario;
use App\Evaluacion as Evaluacion;
use App\Tipo_evaluacion as Tipo_evaluacion;
use App\Descriptor_evaluacion as Descriptor_evaluacion;
use App\Item_evaluacion as Item_evaluacion;
use App\Aviso as Aviso;
use App\Pprivacidad as Pprivacidad;
use App\Competencia as Competencia;
class PublicoController extends Controller
{

    public function index()
    {

      $publicaciones = Publicacion::tomar_nueve_mas_visitados();
      $mas_val = Publicacion::tomar_dos_mas_valorados();
      $mas_megusta = Publicacion::tomar_dos_mas_me_gusta();
      $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('publicaciones.index', compact('publicaciones','categorias','usuarios_ranking','mas_val','mas_megusta','avisos'));

    }

    public function show($id)
    {
      //Pasar esto al Modelo...
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $publicacion = Publicacion::find($id);
      $otras_pub_categoria = Publicacion::tomar_misma_categoria($publicacion->categoria_id,$id);
      $valoracion_pub = Valoracion::select_val_publicacion($id);
      $comentarios = Comentario::select_comentarios($id);

    //  return $comentarios;
    if( $publicacion->competencia_id == null)
    {
      $competidores = null;
      $evaluacion = Evaluacion::where('publicaciones_id',$id)->first();
    }
    else
    {
      $competidores = Publicacion::tomar_misma_competencia($publicacion->competencia_id);
      $id_compe=$publicacion->competencia_id;
      $evaluacion = Evaluacion::where('competencia_id',$id_compe)->first();
    }

    if($publicacion->estado->nombre=="activo")
    {
       return view('ficha.index', compact('evaluacion','publicacion','categorias','competidores','otras_pub_categoria','valoracion_pub','comentarios','avisos'));
    }
    else
    {
       return redirect('/');
    }

    }

    public function muestra_registro()
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('registro.index', compact('categorias','usuarios_ranking','avisos'));
    }


    public function muestra_proyecto()
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('t-mido.index', compact('categorias','usuarios_ranking','avisos'));
      //return view('t-mido.index');
    }

    public function muestra_noticias()
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('noticias.index', compact('categorias','usuarios_ranking','avisos'));
    }

    public function muestra_contacto()
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('contacto.index', compact('categorias','usuarios_ranking','avisos'));
    }
    public function muestra_ranking()
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      return view('ranking.index', compact('categorias','usuarios_ranking','avisos'));
    }
    public function muestra_politicas()
    {
      $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();
      $politicas = Pprivacidad::trae_politica();
      return view('politicas.index', compact('categorias','usuarios_ranking','avisos','politicas'));
    }

    public function muestra_cuenta(Request $request) //Validar USUARIO ****
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();

      $usuario = session('usuario');  //Validar USUARIO ****
      $request->session()->put('usuario', $usuario); //Validar USUARIO ****

      return view('cuenta.index', compact('categorias','usuarios_ranking','avisos'));

    }

    public function guarda_datos_cuenta(Request $request) //Validar
    {
        $avisos = Aviso::trae_avisos_activos();
      $categorias = Categoria::All();
      $usuarios_ranking = Cuenta_usuario::tomar_tres_ranking_participacion();

      $usuario = session('usuario');  //Validar USUARIO ****
      $request->session()->put('usuario', $usuario); //Validar USUARIO ****

      return view('cuenta.index', compact('categorias','usuarios_ranking','avisos'));

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





    public function votar_valorar(Request $request)
    {

      $usuario = session('usuario');
      $request->session()->put('usuario', $usuario);

      if($usuario)
      {
          $check_valoracion = Valoracion::comprobar_valoracion($request->idp,$usuario->id);
          if($check_valoracion)
          {
             return "Lo sentimos, ya haz valorado esta publicacion!...";
          }
          else
          {
            Valoracion::inserta_valoracion($request->idp,$usuario->id,$request->val);
            return "Gracias por tu voto!";
          }
        }
      else
      {
        return "Debes acceder como usuario para votar!...";
      }

    }






    public function busqueda($categoria, $palabra_clave = null)
    {
        $avisos = Aviso::trae_avisos_activos();
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

        return view('directorio.index', compact('publicaciones','categorias','cat_id','avisos'));
    }

public function comentar(Request $request)
{
  $usuario = session('usuario');
  $request->session()->put('usuario', $usuario);
  if($usuario)
  {
    Comentario::inserta_comentario($request->idp,$usuario->id,$request->com);
    return "OK";
  }
  else
  {
    return "Debes acceder como usuario para Comentar!...";
  }
}


public function votar_megusta_comentario(Request $request)
    {
    $usuario = session('usuario');
    $request->session()->put('usuario', $usuario);

    if($usuario)
    {
        $check_votacion = Me_gusta::comprobar_votacion_comentario($request->idcom,$usuario->id);

        if($check_votacion)
        {
            return "Lo sentimos, ya haz votado anteriormente!...";

        }
        else
        {

            Me_gusta::inserta_megusta_comentario($request->idcom,$usuario->id,$request->op);

          return "Gracias por tu voto!";
        }
      }
    else
    {
      return "Debes acceder como usuario para votar!...";
    }
  }

public function show_evaluacion_publicacion($id_publ)
{
$publicacion=Publicacion::where('id',$id_publ)->first();
$evaluacion = Evaluacion::where('publicaciones_id',$id_publ)->first();
$ideva=$evaluacion->id;
$descriptores = Descriptor_evaluacion::where('evaluaciones_id',$ideva)->get();
$promedios = array();
foreach($descriptores as $des)
{
     $id_descriptor = $des->id;
     $suma = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->sum('puntaje');
     $cantidad = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->count();
if($cantidad==0){
  $prom = 0;
}else{
  $prom = $suma/$cantidad;
}


     array_push($promedios, $prom);
}




return view('evaluacion.index',compact('evaluacion','descriptores','publicacion','promedios'));
}


public function show_evaluacion_competencia($id_publ,$id_com)
{
$publicacion=Publicacion::where('id',$id_publ)->first();
$evaluacion = Evaluacion::where('competencia_id',$id_com)->first();
$ideva=$evaluacion->id;
$descriptores = Descriptor_evaluacion::where('evaluaciones_id',$ideva)->get();

$promedios = array();
foreach($descriptores as $des)
{
     $id_descriptor = $des->id;
     $suma = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->sum('puntaje');
     $cantidad = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->count();
if($cantidad==0){
  $prom = 0;
}else{
  $prom = $suma/$cantidad;
}


     array_push($promedios, $prom);
}

return view('evaluacion.index',compact('evaluacion','descriptores','publicacion','promedios'));
}

public function show_graficos_publicacion($id_publ,$id_com = null)
{
  if($id_com == null)
  {
    $publicacion=Publicacion::where('id',$id_publ)->first();
    $evaluacion = Evaluacion::where('publicaciones_id',$id_publ)->first();
    $ideva=$evaluacion->id;
  }
  else
  {
    $publicacion=Publicacion::where('id',$id_publ)->first();
    $evaluacion = Evaluacion::where('competencia_id',$id_com)->first();
    $ideva=$evaluacion->id;
  }

  $descriptores = Descriptor_evaluacion::where('evaluaciones_id',$ideva)->get();
  $promedios = array();
  foreach($descriptores as $des)
  {
       $id_descriptor = $des->id;
       $suma = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->sum('puntaje');
       $cantidad = Item_evaluacion::where('publicaciones_id',$id_publ)->where('descriptor_evaluacion_id',$id_descriptor)->count();

       if($cantidad==0){
         $prom = 0;
       }else{
         $prom = $suma/$cantidad;
       }

       array_push($promedios, $prom);
  }

  return view('evaluacion.graficos',compact('evaluacion','descriptores','publicacion','promedios'));

}



/****************************************************************************************/

public function evaluar_items(Request $request)
{

//publicacion   id de publicacion.
//descriptores  array de id de descriptores.
//puntajes array de puntajes de descriptores.

  $usuario = session('usuario');
  $request->session()->put('usuario', $usuario);

//  publicacion:idp,descriptores:ids_descriptores,puntajes:puntajes

  if($usuario)
  {
      $check_valoracion = Item_evaluacion::comprobar_evaluacion($request->publicacion,$usuario->id);
      if($check_valoracion)
      {
         return "Lo sentimos, ya haz valorado esta publicacion!...";
      }
      else
      {


        Item_evaluacion::inserta_evaluacion($request->publicacion,$request->descriptores,$request->puntajes,$usuario->id);
        return "Gracias por tu voto!";
      }
    }
  else
  {
    return "Debes acceder como usuario para votar!...";
  }

/****************************************************************************************/



}

public function muestra_competencia_categoria($cat)
{
  $avisos = Aviso::trae_avisos_activos();
  $categorias = Categoria::All();
  $competencias = Competencia::where('tipo', '=', 'normal')->with('publicaciones')->get();
  return view('competencia.index', compact('categorias','avisos', 'competencias'));

}




}
