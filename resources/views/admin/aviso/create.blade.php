<?php $seccion = 'avisos'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Aviso')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nuevo Aviso
</h4>
    <form action="/admin/avisos" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="inline field">
            <label>Contenido</label>
            <input name="contenido" placeholder="contenido" type="text" maxlength="76">
        </div>
        <div class="inline field">
            <label>URL del Aviso</label>
            <input name="url" placeholder="URL" type="text" maxlength="200">
        </div>
        <div class="inline field">
          <div class="ui toggle checkbox">
            <input class="hidden" tabindex="0" name="estado" type="checkbox">
            <label>Estado</label>
          </div>
        </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/avisos">Cancelar</a>
</div>
    </form>

  @endsection
