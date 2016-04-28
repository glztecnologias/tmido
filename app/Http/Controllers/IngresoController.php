<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail as Mail;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cuenta_usuario as Cuenta_usuario;
use App\Random_code as Random_code;
class IngresoController extends Controller
{
 public function postLogin(Request $request)
 {
       $usuario = Cuenta_usuario::where('email',$request->email)
                                  ->where('password',$request->password)
                                  ->where('estado_id',1)
                                  ->first();
       if($usuario)
      {
        Auth::login($usuario);
        // session(['nombre' => $usuario->nombres,'id'=> $usuario->id]);
      session(['usuario' => $usuario]);
      $request->session()->put('usuario', $usuario);

    //  return $usuario;
    return redirect('/');

    //  return view('publicaciones.index', compact('user'));
      }
      else
      {
        return redirect('/');
      }

      //return redirect('/');

 }

 public function getLogout(Request $request)
 {

   $request->session()->flush();
        //Auth::logout();

       return redirect('/');
 }

 public function getRegister()
 {

 }


 public function postRegister(Request $request)
 {
    if(Cuenta_usuario::where('email',$request->email)->first())
    {

      return redirect('/registro')->with('error', 'El correo ya esta registrado!');
    }

    $nuevo_usuario = new Cuenta_usuario;
    $nuevo_usuario->nombres = $request->name;
    $nuevo_usuario->apellidos = $request->lname;
    $nuevo_usuario->email =  $request->email;
    $nuevo_usuario->password =  $request->password;
    $nuevo_usuario->estado_id = 2;
    $nuevo_usuario->save();

    $codigo = new Random_code;
    $codigo->code = str_random(40);
    $usuario = Cuenta_usuario::where('email',$request->email)->first();
    $codigo->cuenta_usuario_id = $usuario->id;
    $codigo->save();
    /**$data = ["mensaje" => "Hola Mundo"];
    Mail::send('email.welcome', $data, function ($message) {
        $message->from('agc005@gmail.com', 'T-mido');
        $message->to('alxmlo@gmail.com')->cc('agc005@gmail.com');
      });**/
    $link ='verificacion_correo/'.$codigo->code;
    $nombre = $nuevo_usuario->nombres." ".$nuevo_usuario->apellidos;
    $email=$nuevo_usuario->email;
    $pass=$nuevo_usuario->password;
      return view('mail_p.index', compact('link','nombre','email','pass'));

    //return  $codigo->code;
    //return redirect('/');
 }

public function verificacion_correo(Request $request)
{
//
  if($cod = Random_code::where('code',$request->code)->first())
  {
    //$cod->cuenta_usuario->estado_id = 1;
    $usuario = Cuenta_usuario::where('id',$cod->cuenta_usuario->id)->first();
    $usuario->estado_id = 1;
    $usuario->save();
    return 'Tu cuenta a sido activada!';

  }
  else
  {
    return redirect('/registro');

  }


}

}
