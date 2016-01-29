<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publicacion as Publicacion;
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

    //consultas
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
      $megusta->si = 0;
      $megusta->no = 1;
      $megusta->save();
      $publicacion = Publicacion::find($id_publicacion);
      $publicacion->nomegusta = $publicacion->nomegusta + 1;
      $publicacion->save();

    }

}
