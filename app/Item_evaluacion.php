<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
