<?php $seccion = 'estados'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Estado')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nuevo Estado
</h4>
    <form action="/admin/estados" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text">
        </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/estados">Cancelar</a>
</div>
    </form>

  @endsection
