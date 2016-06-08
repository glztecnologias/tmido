<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    //
    protected $table = 'avisos';
    public $timestamps = false;

    public function estado() //relacion con estado de publicacion
    {
        return $this->belongsTo('App\Estado');
    }

    public static function trae_avisos_activos()
    {

      return Aviso::where('estado_id',1)->get();

    }
}
