<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pprivacidad extends Model
{
    //
    protected $table = 'politicas';
    public $timestamps = false;

    public static function trae_politica()
    {

      return Pprivacidad::first();

    }
}
