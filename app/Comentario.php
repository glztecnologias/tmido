<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
