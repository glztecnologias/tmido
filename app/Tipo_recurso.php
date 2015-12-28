<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_recurso extends Model
{
    //
    protected $table = 'tipo_recurso';
    public $timestamps = false;

    public function recursos()
    {
        return $this->hasMany('App\Recurso', 'tipo_recurso_id');
    }
}
