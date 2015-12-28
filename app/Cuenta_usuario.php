<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta_usuario extends Model
{
    //
    protected $table = 'cuenta_usuario';
    public $timestamps = false;

    public function tipo_usuario() //relacion con tabla tipo de usuario
    {
        return $this->belongsTo('App\Tipo_usuario');
    }
}
