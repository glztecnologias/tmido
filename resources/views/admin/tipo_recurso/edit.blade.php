<?php $seccion = 'tipo_recursos'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Tipo de Recurso')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita  Tipo de Recurso
</h4>
    <form action="/admin/tipo_recursos/{{ $tipo_recurso->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" value="{{ $tipo_recurso->nombre }}">
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" value="{{ $tipo_recurso->descripcion }}">
        </div>
        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/tipo_recursos">Cancelar</a>
</div>
    </form>

  @endsection
