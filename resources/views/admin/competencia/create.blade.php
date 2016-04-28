<?php $seccion = 'competencias'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Competencia')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nueva Competencia
</h4>
    <form action="/admin/competencias" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text">
        </div>
        <div class="field">
            <label>Subfijo de Titulo</label>
            <input name="sufijo" placeholder="Subfijo de Titulo" type="text" >
        </div>


        <div class="field">
           <label>Descripcion</label>
         <input type="text" name="descripcion" value="Descipcion de competencia">
         </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/competencias">Cancelar</a>
</div>
    </form>

  @endsection
