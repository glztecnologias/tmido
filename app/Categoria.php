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

    public static function trae_id($n_url)
    {
    if ($n_url == 'todas')
    {
      return 'todas';
    } else{
      return Categoria::where('nombre_url',$n_url)->get();
//select('id')->
    }


    }
}
