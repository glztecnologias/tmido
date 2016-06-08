<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    //
    protected $table = 'competencia';
    public $timestamps = false;

    public function evaluacion() //relacion con tipo de evaluacion
    {
        return $this->hasOne('App\Evaluacion','competencia_id');
    }

    public function publicaciones()
    {
      return $this->hasMany('App\Publicacion', 'competencia_id');
    }
}
