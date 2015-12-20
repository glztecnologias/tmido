<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    //
    protected $table = 'recurso';
    public $timestamps = false;

    public function tipo_recurso()
    {
        return $this->belongsTo('App\Tipo_recurso');
    }
    public function publicaciones()
    {
      return $this->belongsTo('App\Publicacion');
    }
    public function comentario()
    {
      // se requirio añadir una foreng key
      return $this->belongsTo('App\Comentario', 'comentarios_id');
    }
}
