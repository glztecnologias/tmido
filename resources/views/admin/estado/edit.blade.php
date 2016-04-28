<?php $seccion = 'estados'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Estado')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita  Estado
</h4>
    <form action="/admin/estados/{{ $estado->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" value="{{ $estado->nombre }}">
        </div>
        
        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/estados">Cancelar</a>
</div>
    </form>

  @endsection
