<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluador extends Model
{
    //
    protected $table = 'evaluador';
    public $timestamps = false;
    
    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }
    public function tipo_evaluador() //relacion con tipo de evaluador
    {
        return $this->belongsTo('App\Tipo_evaluador');
    }
}
