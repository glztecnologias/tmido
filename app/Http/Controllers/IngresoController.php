<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cuenta_usuario as Cuenta_usuario;

class IngresoController extends Controller
{
 public function postLogin(Request $request)
 {
       $usuario = Cuenta_usuario::where('email',$request->email)
                                  ->where('password',$request->password)
                                  ->first();
       if($usuario)
      {
        Auth::login($usuario);
        $user = Auth::user();
        return $user->nombres;
      }

      return redirect('/');

 }

 public function getLogout()
 {
       if (Auth::check())
       {
        Auth::logout();
       }
       return redirect('/');
 }

 public function getRegister()
 {

 }


 public function postRegister(Request $request)
 {
    if(Cuenta_usuario::where('email',$request->email)->first())
    {
      return redirect('/registro');
    }

    $nuevo_usuario = new Cuenta_usuario;
    $nuevo_usuario->nombres = $request->name;
    $nuevo_usuario->apellidos = $request->lname;
    $nuevo_usuario->email =  $request->email;
    $nuevo_usuario->password =  $request->password;
    $nuevo_usuario->save();
    return redirect('/');
 }

}
