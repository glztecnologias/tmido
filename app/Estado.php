<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estados';
    public $timestamps = false;

    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion', 'estado_id');
    }

    public function cuenta_usuario()
    {
        return $this->hasMany('App\Cuenta_usuario', 'estado_id');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario', 'estado_id');
    }


}
