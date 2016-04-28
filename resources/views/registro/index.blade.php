<?php $seccion = 'registro'; ?>
@extends('layouts/master')
@section('titulo','Registro')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
        <!--BANNER-->
        <div id="banner">
        	<a href="javascript:void(0);" target="_blank"><img src="http://www.teohilfe.cl/clientes/tmido/imag/banner_vertical.jpg" width="119" height="588" alt="banner vertical"></a>
        </div>
        <!--BANNER END-->

    <div id="homeLeft">
      @if (session('error'))
     <div class="alert alert-success">
         {{ session('error') }}
     </div>
     @endif
    <h1><i class="fa fa-pencil-square-o"> </i>  Registro de Usuario</h1>

    <form id="form_registro" method="POST" action="/ingreso/register">
        {!! csrf_field() !!}
        <div class="input_registro"><label>Nombres</label></br><input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <br>
        <div class="input_registro"><label>Apellidos</label><br><input type="text" name="lname" value="{{ old('lname') }}" required>
        </div>
        <br>
        <div class="input_registro"><label>E-Mail</label><br><input type="email" name="email" value="{{ old('email') }}" required>
        </div>
<br>
        <div class="input_registro"><label>Contraseña</label>  <br><input type="password" name="password" required>
        </div>
<br>
        <div class="input_registro"><label>Confirmar Contraseña</label>  <br><input type="password" name="password_confirmation"required>
        </div>
<br>
          <div class="input_registro">  <input  type="checkbox" required >He leído y acepto la
            <a href="javascript:void(0);" onclick="window.open('/politicas','Privacidad','scrollbars=yes,width=400,height=400')">
              <b><u>Polí­tica de privacidad</u></b></a></div>
<br>
        <div class="input_registro"><button type="submit">Enviar Datos</button>
        </div>
    </form>

      </div>

    <div id="homeRight">

    </div>
    </div>

@endsection
