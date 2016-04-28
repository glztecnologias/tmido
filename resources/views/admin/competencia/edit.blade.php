<?php $seccion = 'competencias'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Competencia')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita Competencia
</h4>
    <form action="/admin/competencias/{{ $competencia->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" value="{{ $competencia->nombre }}">
        </div>
        <div class="field">
            <label>Sufijo de Titulo</label>
            <input name="sufijo" placeholder="Nombre en URL" type="text" value="{{ $competencia->sufijo_titulo }}" >
        </div>


        <div class="field">
           <label>Descripcion</label>
         <input type="text" name="descripcion" value="{{ $competencia->descripcion }}">
         </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/competencias">Cancelar</a>
</div>
    </form>

  @endsection
