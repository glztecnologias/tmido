<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_publicacion extends Model
{
    //
    protected $table = 'tipo_publicaciones';
    public $timestamps = false;
    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion', 'tipo_publicacion_id');
    }
}
