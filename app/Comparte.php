<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparte extends Model
{
    //
    protected $table = 'comparte';
    public $timestamps = false;

    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }

    public function publicaciones() //relacion con publicaciones
    {
        return $this->belongsTo('App\Publicacion');
    }
}
