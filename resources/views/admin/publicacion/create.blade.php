<?php $seccion = 'publicaciones'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de publicaciones')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nueva Publicacion
</h4>
    <form action="/admin/publicaciones" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Titulo</label>
            <input name="titulo" placeholder="Titulo" type="text">
        </div>
        <div class="field">
            <label>Descripcion Corta</label>
            <input name="descripcion_corta" placeholder="Descripcion Corta" type="text" >
        </div>
        <div class="field">
            <label>Descripcion Larga</label>
            <input name="descripcion_larga" placeholder="Descripcion Larga" type="text" >
        </div>

        <div class="field">
            <label>URL_FOTO</label>
            <input name="url_foto" placeholder="url_foto" type="text" >
        </div>
        <div class="field">
            <label>Fecha de Inicio</label>
            <input type="text" name="f_inicio" value="" />
        </div>
        <div class="field">
            <label>Fecha de Inicio</label>
            <input type="text" name="f_termino" value="" />
        </div>


      <!--  <div class="ui form">
          <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input tabindex="0" name="tipo"  checked="" type="radio">
            <label>Normal</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input  tabindex="0" name="tipo"  type="radio">
            <label>Competencia</label>
          </div>
        </div>
      </div>
    </div>-->
    <div class="field">
      <label>Competencia</label>
      <select class="ui fluid dropdown" name="competencia">
<option value="NULL">Individual (Sin Competencia)</option>
        @forelse($competencias as $competencia)
        <option value="{{$competencia->id}}" >{{$competencia->nombre}} </option>
        @empty
        <option value="NULL">Sin Competencias Aun</option>
        @endforelse
      </select>
    </div>


            <div class="field">
              <label>Categoria</label>
              <select class="ui fluid dropdown" name="categoria">
                @forelse($categorias as $categoria)
                <option value="{{$categoria->id}}" style="background:{{$categoria->descripcion}};">{{$categoria->nombre}}</option>
                @empty
                <option value="NULL">Sin Categorias Aun</option>
                @endforelse
              </select>
            </div>


            <div class="field">
              <label>Estado</label>
              <select class="ui fluid dropdown" name="estado">

                @forelse($estados as $estado)
                <option value="{{$estado->id}}" >{{$estado->nombre}} </option>
                @empty
                <option value="NULL">Sin Estados Aun</option>
                @endforelse
              </select>
            </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/publicaciones">Cancelar</a>
</div>
    </form>

  @endsection
