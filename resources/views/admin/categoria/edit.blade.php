<?php $seccion = 'categorias'; ?>
@extends('admin/dashboard')
@section('titulo','Editar Categoria')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Edita  Categoria
</h4>
    <form action="/admin/categorias/{{ $categoria->id }}" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" value="{{ $categoria->nombre }}">
        </div>
        <div class="field">
            <label>Nombre en URL</label>
            <input name="nombre_url" placeholder="Nombre en URL" type="text" value="{{ $categoria->nombre_url }}" >
        </div>


        <div class="field">
           <label>Color</label>
         <input type="color" name="color" value="{{ $categoria->descripcion }}">
         </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/categorias">Cancelar</a>
</div>
    </form>

  @endsection
