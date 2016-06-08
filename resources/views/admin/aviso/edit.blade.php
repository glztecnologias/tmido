<?php $seccion = 'avisos'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Aviso')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita  Aviso
</h4>
    <form action="/admin/avisos/{{ $aviso->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class=" inlinefield">
            <label>Contenido</label>
            <input name="contenido" placeholder="Contenido" type="text" value="{{ $aviso->contenido }}">
        </div>
        <div class="inline field">
            <label>URL</label>
            <input name="url" placeholder="URL" type="text" value="{{ $aviso->url }}" >
        </div>

        <div class="inline field">
          <div class="ui toggle checkbox">
            <input class="hidden" tabindex="0" name="estado" type="checkbox" <?php if($aviso->estado_id == 1 ){echo 'checked="checked"';}?>>
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
