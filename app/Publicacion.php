<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    //
    protected $table = 'publicaciones';
    public $timestamps = false;

    public function categoria() //relacion con tipo de publicacion
    {
        return $this->belongsTo('App\Categoria');
    }


    public function tipo_publicacion() //relacion con tipo de publicacion
    {
        return $this->belongsTo('App\Tipo_publicacion');
    }

    public function competencia() //relacion con compentencia (puede ser null)
    {
      return $this->belongsTo('App\Competencia');
    }
    public function cuenta_usuario() //relacion con cuenta de usuario
    {
        return $this->belongsTo('App\Cuenta_usuario');
    }
    public function recursos()
    {
        return $this->hasMany('App\Recurso', 'publicaciones_id');
    }

    //Consultas....

    public static function tomar_nueve_mas_visitados()
    {
      return Publicacion::orderBy('contador', 'desc')->take(9)->get();
    }
    public static function tomar_dos_mas_valorados()
    {
      return Publicacion::orderBy('valoracion', 'desc')->take(2)->get();
    }
    public static function tomar_dos_mas_me_gusta()
    {
      return Publicacion::orderBy('neto_megusta', 'desc')->take(2)->get();
    }
}
