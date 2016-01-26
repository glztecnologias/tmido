<?php $seccion = 'ranking'; ?>
@extends('layouts/master')
@section('titulo','inicio')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <h1> Ranking de Usuarios </h1>
@endsection
