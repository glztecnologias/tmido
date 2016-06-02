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
        <div class="inline field">
            <label>Titulo</label>
            <input name="titulo" placeholder="Titulo" type="text">
        </div>
        <div class="inline field">
            <label>Descripcion Corta</label>
            <input name="descripcion_corta" placeholder="Descripcion Corta" type="text" >
        </div>
        <div class="inline field">
            <label>Descripcion Larga</label>
            <input name="descripcion_larga" placeholder="Descripcion Larga" type="text" >
        </div>

        <div class="inline field">
            <label>URL_FOTO</label>
            <input name="url_foto" placeholder="url_foto" type="text" >
        </div>
        <div class="inline field">
            <label>Fecha de Inicio</label>
            <input type="text" name="f_inicio" value="" />
        </div>
        <div class="inline field">
            <label>Fecha de Inicio</label>
            <input type="text" name="f_termino" value="" />
        </div>

    <div class="inline field">
      <label>Competencia</label>
      <select class="ui fluid dropdown" name="competencia">
<option value="null">Individual (Sin Competencia)</option>
        @forelse($competencias as $competencia)
        <option value="{{$competencia->id}}" >{{$competencia->nombre}} </option>
        @empty
        <option value="null">Sin Competencias Aun</option>
        @endforelse
      </select>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" name="act_megusta" tabindex="0" type="checkbox">
        <label>Mostrar Me Gusta! <i class="thumbs outline up icon"></i><i class="thumbs outline down icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_comentarios"  type="checkbox">
        <label>Mostrar Comentarios <i class="comments icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_valoracion" type="checkbox">
        <label>Mostrar Valoracion <i class="empty star icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_comparte" type="checkbox">
        <label>Mostrar Compartir <i class="share alternate icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_graficos" type="checkbox">
        <label>Mostrar Graficos / Puntajes  <i class="bar chart icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_evaluacion" type="checkbox">
        <label>Mostrar Evaluacion / Voto  <i class="pointing up icon"></i> <i class="empty star icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_recursos" type="checkbox">
        <label>Mostrar Recursos  <i class="file image outline icon"></i><i class="file video outline icon"></i><i class="file pdf outline icon"></i></label>
      </div>
    </div>

    <div class="inline field">
      <div class="ui toggle checkbox">
        <input class="hidden" tabindex="0" name="act_regresiva" type="checkbox">
        <label>Mostrar Cuenta Regresiva  <i class="wait icon"></i></label>
      </div>
    </div>


            <div class=" inline field">
              <label>Categoria</label>
              <select class="ui fluid dropdown" name="categoria">
                @forelse($categorias as $categoria)
                <option value="{{$categoria->id}}" style="background:{{$categoria->descripcion}};">{{$categoria->nombre}}</option>
                @empty
                <option value="NULL">Sin Categorias Aun</option>
                @endforelse
              </select>
            </div>


            <div class="inline field">
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
