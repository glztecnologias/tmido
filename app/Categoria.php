<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';
    public $timestamps = false;
    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion', 'categoria_id');
    }
}
