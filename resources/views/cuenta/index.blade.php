<?php $seccion = 'cuenta'; ?>
@extends('layouts/master')
@section('titulo','cuenta_usuario')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <h1>Cuenta Usuario</h1>

      @if($datos_user = session('usuario'))
      <strong>{{ $datos_user->nombres }}</strong>
      <a href="/ingreso/logout"> Salir</a>

      



      @endif
@endsection
