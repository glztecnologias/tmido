<?php $seccion = 'politicas'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Politica Privacidad')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita  Politica Privacidad
</h4>
    <form action="/admin/politicas/{{ $politica->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class=" inlinefield">
            <label>Contenido</label>
            <textarea name="contenido" type="text">{{ $politica->contenido }}</textarea>
        </div>
        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/politicas">Cancelar</a>
</div>
    </form>

  @endsection
