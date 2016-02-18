<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publicacion as Publicacion;
use App\Comentario as Comentario;
class Me_gusta extends Model
{
    //
    protected $table = 'me_gusta';
    public $timestamps = false;

    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }

    public function publicaciones() //relacion con publicaciones
    {
        return $this->belongsTo('App\Publicacion');
    }

    public function comentarios() //relacion con publicaciones
    {
        return $this->belongsTo('App\Comentario');
    }

    //consultas
    //*********************consultas de publicacion*************************//

    public static function comprobar_votacion($id_publicacion, $id_usuario)
    {
      return Me_gusta::where('publicaciones_id',$id_publicacion)
      ->where('cuenta_usuario_id',$id_usuario)->first();
    //  return "si";->where('si',1)
    }
    public static function inserta_megusta($id_publicacion, $id_usuario)
    {
       $megusta = new Me_gusta;
       $megusta->cuenta_usuario_id = $id_usuario;
       $megusta->publicaciones_id  = $id_publicacion;
       $megusta->comentarios_id  = null;
       $megusta->si = 1;
       $megusta->no = 0;
       $megusta->save();
       $publicacion = Publicacion::find($id_publicacion);
       $publicacion->megusta = $publicacion->megusta + 1;
       $publicacion->save();


    }
    public static function inserta_nomegusta($id_publicacion,$id_usuario)
    {
      $megusta = new Me_gusta;
      $megusta->cuenta_usuario_id = $id_usuario;
      $megusta->publicaciones_id  = $id_publicacion;
      $megusta->comentarios_id  = null;
      $megusta->si = 0;
      $megusta->no = 1;
      $megusta->save();
      $publicacion = Publicacion::find($id_publicacion);
      $publicacion->nomegusta = $publicacion->nomegusta + 1;
      $publicacion->save();

    }

    public static function cambia_a_megusta($id_publicacion,$id_usuario)
    {
      $megusta = Me_gusta::where('publicaciones_id',$id_publicacion)
      ->where('cuenta_usuario_id',$id_usuario)->first();
      $megusta->si = 1;
      $megusta->no = 0;
      $megusta->save();
      $publicacion = Publicacion::find($id_publicacion);
      $publicacion->nomegusta = $publicacion->nomegusta - 1;
      $publicacion->megusta = $publicacion->megusta + 1;
      $publicacion->save();

    }

    public static function cambia_a_nomegusta($id_publicacion,$id_usuario)
    {
      $megusta = Me_gusta::where('publicaciones_id',$id_publicacion)
      ->where('cuenta_usuario_id',$id_usuario)->first();
      $megusta->si = 0;
      $megusta->no = 1;
      $megusta->save();
      $publicacion = Publicacion::find($id_publicacion);
      $publicacion->megusta = $publicacion->megusta - 1;
      $publicacion->nomegusta = $publicacion->nomegusta + 1;
      $publicacion->save();


    }

//**************************************************************************//
//*********************consultas de comentarios*************************//

public static function comprobar_votacion_comentario($id_com, $id_usuario)
{
  return Me_gusta::where('comentarios_id',$id_com)
  ->where('cuenta_usuario_id',$id_usuario)->first();

}

public static function inserta_megusta_comentario($id_com,$id_usuario,$opcion)
{

  $megusta = new Me_gusta;
  $megusta->cuenta_usuario_id = $id_usuario;
  $megusta->comentarios_id  = $id_com;
  $megusta->publicaciones_id  = null;
if($opcion=="si")
{
  $megusta->si = 1;
  $megusta->no = 0;
}
else
{
  $megusta->si = 0;
  $megusta->no = 1;
}

  $megusta->save();

  $comentario = Comentario::find($id_com);

  if($opcion=="si")
  {
  $comentario->megusta = $comentario->megusta + 1;
  }
  else
  {
  $comentario->nomegusta = $comentario->nomegusta + 1;
  }
  $comentario->save();

}





//**************************************************************************//

}
