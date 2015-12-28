<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    //
    protected $table = 'tipo_usuario';
    public $timestamps = false;
    public function precio_cuenta() //relacion con tabla de precio
    {
        return $this->belongsTo('App\Precio_cuenta');
    }
}
