<?php $seccion = 'politicas'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Politica  de Privacidad')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Politica de Privacidad
</h4>
    <form action="/admin/politicas" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Contenido</label>


            <textarea name="contenido" type="text"></textarea>


        </div>
        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/politicas">Cancelar</a>
</div>
    </form>

  @endsection
