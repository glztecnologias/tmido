<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    //
    protected $table = 'valoracion';
    public $timestamps = false;

    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }

    public function comentarios() //relacion con comentarios
    {
        return $this->belongsTo('App\Comentario');
    }
    public function publicaciones() //relacion con publicaciones
    {
        return $this->belongsTo('App\Publicacion');
    }

    //consultas
    public static function comprobar_valoracion($id_publicacion, $id_usuario)
    {
      return Valoracion::where('publicaciones_id',$id_publicacion)
      ->where('cuenta_usuario_id',$id_usuario)->first();
    //  return "si";->where('si',1)
    }

    public static function inserta_valoracion($id_pub,$id_usuario,$nota)
    {
      $valoracion = new Valoracion;
      $valoracion->cuenta_usuario_id = $id_usuario;
      $valoracion->publicaciones_id  = $id_pub;
      $valoracion->comentarios_id = null;
      $nota2 = floatval($nota);
      $valoracion->puntaje = $nota2;
      $valoracion->fechahora = date('Y-m-d H:i:s');
      $valoracion->save();

    }

    public static function select_val_publicacion($id_pub)
    {
      //  $count = Valoracion::where('publicaciones_id',$id_pub)->count();
      $valoraciones = Valoracion::where('publicaciones_id',$id_pub)->get();
      $puntaje=0;
      $contador=0;
      foreach ($valoraciones as $valoracion) {
        $puntaje = $puntaje + $valoracion->puntaje;
        if($puntaje > 0)
        {
          $contador ++;

        }
      }
      if($contador == 0){
        return "0.0";
      }else{
        return $puntaje/$contador;
      }


    }
}
