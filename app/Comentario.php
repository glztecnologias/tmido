<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publicacion;
class Comentario extends Model
{
    //
    protected $table = 'comentarios';
    public $timestamps = false;

    public function comentarios() //Relacion en si misma
    {
        return $this->hasMany('App\Comentario','comentarios_id','id');
    }
    public function publicaciones() //relacion con publicacion
    {
        return $this->belongsTo('App\Publicacion');
    }
    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }
    public function recurso()
    {
      return $this->hasOne('App\Recurso', 'comentarios_id');
    }
    public function estado() //relacion con estado de comentario
    {
        return $this->belongsTo('App\Estado');
    }
//CONSULTAS
    public static function inserta_comentario($id_pub,$id_usuario,$contenido)
    {
      $comentario = new Comentario;
      $comentario->contenido = $contenido;
      $comentario->estado_id  = 1;
      $comentario->publicaciones_id = $id_pub;
      $comentario->cuenta_usuario_id = $id_usuario;
      $comentario->created_at = date('Y-m-d H:i:s');
      $comentario->megusta = 0;
      $comentario->nomegusta = 0;
      //$comentario->updated_at = null;
      $comentario->save();

    }

    public static function select_comentarios($id_pub)
    {
      $comentarios = Comentario::
      where('publicaciones_id',$id_pub)
      ->where('estado_id','1')
      ->orderBy('created_at', 'desc')
      ->get();
      return $comentarios;

    }


}
