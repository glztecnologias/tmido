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

    public function publicaciones() //relacion con publicacion (puede ser null) 
    {
        return $this->belongsTo('App\Publicacion');
    }

    public function competencia() //relacion con compentencia (puede ser null)
    {
      return $this->belongsTo('App\Competencia');
    }
}
