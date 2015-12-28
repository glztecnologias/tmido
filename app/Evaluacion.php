<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $table = 'evaluaciones';
    public $timestamps = false;

    public function tipo_evaluacion() //relacion con tipo de evaluacion
    {
        return $this->belongsTo('App\Tipo_evaluacion');
    }

    public function publicaciones() //relacion con tipo de evaluacion
    {
        return $this->belongsTo('App\Publicacion');
    }
}
