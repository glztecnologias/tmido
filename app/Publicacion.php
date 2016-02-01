<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
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

    public function estado() //relacion con estado de publicacion
    {
        return $this->belongsTo('App\Estado');
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
      return Publicacion::orderBy('megusta', 'desc')->take(2)->get();
    }
    public static function tomar_misma_competencia($id_competencia)
    {
      return Publicacion::where('competencia_id',$id_competencia)
      ->where('estado_id',1)->get();
    }

    public static function tomar_misma_categoria($id_categoria,$id_pub)
    {
      return Publicacion::where('categoria_id',$id_categoria)->
      where('id','<>',$id_pub)->where('estado_id',1)->get();
    }

    public static function buscar_por_categoria($categoria,$palabra_clave)
    {
       if($categoria == 0)
           {
             if(isset($palabra_clave))
             {
               return Publicacion::where('titulo','like',$palabra_clave.'%')->get();
             }
             else
             {
               return Publicacion::All();
             }

           }
       else
           {
             if(isset($palabra_clave))
             {
               return Publicacion::where('categoria_id',$categoria)
                ->where('titulo','like',$palabra_clave.'%')->get();
             }
             else {
               return Publicacion::where('categoria_id',$categoria)->get();
             }
           }
    }


}
