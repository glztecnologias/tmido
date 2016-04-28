<?php $seccion = 'categorias'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Categoria')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nueva Categoria
</h4>
    <form action="/admin/categorias" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text">
        </div>
        <div class="field">
            <label>Nombre en URL</label>
            <input name="nombre_url" placeholder="Nombre en URL" type="text" >
        </div>


        <div class="field">
           <label>Color</label>
         <input type="color" name="color" value="#ff0000">
         </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/categorias">Cancelar</a>
</div>
    </form>

  @endsection
