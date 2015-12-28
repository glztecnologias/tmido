<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago_cuenta extends Model
{
    //
    protected $table = 'pago_cuenta';
    public $timestamps = false;
    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }
}
