<?php $seccion = 'politicas'; ?>
@extends('layouts/master')
@section('titulo','inicio')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <br>
      <h1>Politicas de Privacidad</h1>
      <br>
      <br>
      <p style="max-width: 650px;">

     {{ $politicas->contenido }}.

      </p>
      <br>
      <br>
@endsection
