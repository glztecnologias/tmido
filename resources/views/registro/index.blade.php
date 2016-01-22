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
    <h1><i class="fa fa-pencil-square-o"> </i>  Registro de Usuario</h1>

    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <div>Nombre<input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>E-Mail<input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>Contraseña<input type="password" name="password">
        </div>
        <div>Confirmar Contraseña<input type="password" name="password_confirmation">
        </div>
        <div><button type="submit">Enviar Datos</button>
        </div>
    </form>

      </div>

    <div id="homeRight">

    </div>
    </div>

@endsection
