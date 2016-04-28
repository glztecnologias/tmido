<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descriptor_evaluacion extends Model
{
    //
    protected $table = 'descriptor_evaluacion';
    public $timestamps = false;

    public function evaluaciones()
    {
      return $this->belongsTo('App\Evaluacion');
    }
}
