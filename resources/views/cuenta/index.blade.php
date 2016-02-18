<?php $seccion = 'cuenta'; ?>
@extends('layouts/master')
@section('titulo','cuenta_usuario')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <h1>Datos Usuario</h1>
      <a href="/ingreso/logout"> Cerrar Sesion</a><br>
<form class="">
  {!! csrf_field() !!}
<div class="datos_usuario">
      @if($datos_user = session('usuario'))
      <label class="label_datos">Usuario E-Mail : {{ $datos_user->email }}</label><br>
      <label class="label_datos">Fotografia</label>
      <input class="input_datos"  name="url_foto" type="text" value="{{ $datos_user->url_foto }}"/><br>
      <label class="label_datos">Nombres</label>
      <input class="input_datos" name="nombres" type="text" value="{{ $datos_user->nombres }}"/><br>
      <label class="label_datos">Apellidos</label>
      <input class="input_datos" name="apellidos" type="text" value="{{ $datos_user->apellidos }}"/><br>
      <label class="label_datos">rut</label>
      <input class="input_datos"  name="rut" type="text" value="{{ $datos_user->rut }}"/><br>

      <label class="label_datos">Password</label>
      <input class="input_datos" type="text" value="{{ $datos_user->password }}"/><br>
      <label class="label_datos" name="comuna" >comuna</label>
      <input class="input_datos" type="text" value="{{ $datos_user->comuna }}"/><br>
      <label class="label_datos">ciudad</label>
      <input class="input_datos" name="ciudad" type="text" value="{{ $datos_user->ciudad }}"/><br>
      <label class="label_datos">pais</label>
      <input class="input_datos" name="pais" type="text" value="{{ $datos_user->pais }}"/><br>
      <label class="label_datos">Fecha de Nacimiento</label>
      <input class="input_datos" name="f_nac" type="text" value="{{ $datos_user->f_nac }}"/><br>
      <label class="label_datos">sexo</label>
      <input class="input_datos" name="sexo" type="text" value="{{ $datos_user->sexo }}"/><br>
      <label class="label_datos">facebook url</label>
      <input class="input_datos" type="text" name="facebook" value="{{ $datos_user->facebook }}"/><br>
      <label class="label_datos">google+ url</label>
      <input class="input_datos" type="text"  name="google" value="{{ $datos_user->google }}"/><br>
      <input class="botonComentario" type="submit" value="Actualizar Datos!" style="width:120px;margin-right: 0px;"/><br>
      @endif
</div>
</form>
@endsection
