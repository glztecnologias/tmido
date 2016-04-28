<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Random_code extends Model
{
    //
    protected $table = 'random_code';
    public $timestamps = false;

    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }

    public function estado() //relacion con estado de cuenta de usuario
    {
        return $this->belongsTo('App\Estado');
    }

    
}
