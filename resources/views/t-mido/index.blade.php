<?php $seccion = 'proyecto'; ?>
@extends('layouts/master')
@section('titulo','inicio')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <h1>Proyecto T-Mido</h1>
@endsection
