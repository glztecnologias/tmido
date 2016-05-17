<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Evaluador as Evaluador;
class Item_evaluacion extends Model
{
    //
    protected $table = 'item_evaluacion';
    public $timestamps = false;


    public function descriptor_evaluacion()
    {
      return $this->belongsTo('App\Descriptor_evaluacion');
    }
    public function evaluador()
    {
      return $this->belongsTo('App\Evaluador');
    }
    public function publicaciones() //relacion con publicacion (puede ser null)
    {
        return $this->belongsTo('App\Publicacion');
    }

/***********FUNCIONES************/

public static function comprobar_evaluacion($id_publicacion, $id_usuario)
{
  $evaluador = Evaluador::where('cuenta_usuario_id',$id_usuario)->first();
  $id_evaluador = $evaluador->id;
 return Item_evaluacion::where('publicaciones_id',$id_publicacion)
  ->where('evaluador_id',$id_evaluador)->first();
//  return "si";->where('si',1)
}

public static function inserta_evaluacion($id_pub,$descriptores,$puntajes,$id_usuario)
{

$descript = json_decode($descriptores);
$punt = json_decode($puntajes);
$evaluador = Evaluador::where('cuenta_usuario_id',$id_usuario)->first();
$id_evaluador = $evaluador->id;

for ($i=0;$i<sizeof($descript);$i++)
{
    $evaluacion = new Item_evaluacion;
    $evaluacion->evaluador_id = $id_evaluador;
    $evaluacion->publicaciones_id = $id_pub;
    $evaluacion->descriptor_evaluacion_id = $descript[$i] ;
    $evaluacion->puntaje = $punt[$i];
    $evaluacion->save();

}

}




}
