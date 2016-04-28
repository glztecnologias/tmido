<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Cuenta_usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
  use Authenticatable, Authorizable, CanResetPassword;
    //
    protected $table = 'cuenta_usuario';
    public $timestamps = false;

    public function tipo_usuario() //relacion con tabla tipo de usuario
    {
        return $this->belongsTo('App\Tipo_usuario');
    }

    public function estado() //relacion con estado de cuenta de usuario
    {
        return $this->belongsTo('App\Estado');
    }
    public function ramdom_code() //relacion con estado de cuenta de usuario
    {
        return $this->hasOne('App\Random_code');
    }

    //consultas...

    public static function tomar_tres_ranking_participacion()
    {
      return Cuenta_usuario::orderBy('puntaje_participa', 'desc')->take(3)->get();

    }
}
