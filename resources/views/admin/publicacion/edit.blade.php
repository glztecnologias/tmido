<?php $seccion = 'publicaciones'; ?>
@extends('admin/dashboard')
@section('titulo','Edita Publicacion')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="edit icon"></i>
  Editar publicación
</h4>
    <form action="/admin/publicaciones/{{ $publicacion->id }}" method="post" class="ui form">
       <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="inline field">
        <label>Titulo</label>
        <input name="titulo" placeholder="Titulo" type="text" value="{{ $publicacion->titulo }}">
    </div>
    <div class="inline field">
        <label>Descripcion Corta</label>
        <input name="descripcion_corta" placeholder="Descripcion Corta" type="text"  value="{{ $publicacion->descripcion_corta }}">
    </div>
    <div class="inline field">
        <label>Descripcion Larga</label>
        <input name="descripcion_larga" placeholder="Descripcion Larga" type="text" value="{{ $publicacion->descripcion_larga }}">
    </div>

    <div class="inline field">
        <label>URL_FOTO</label>
        <input name="url_foto" placeholder="url_foto" type="text" value="{{ $publicacion->url_foto }}">
    </div>
    <div class="inline field">
        <label>Fecha de Inicio</label>
        <input type="text" name="f_inicio" value="{{ $publicacion->f_inicio }}" />
    </div>
    <div class="inline field">
        <label>Fecha de Inicio</label>
        <input type="text" name="f_termino" value="{{ $publicacion->f_termino }}" />
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
    <input class="hidden" name="act_megusta" tabindex="0" type="checkbox"  <?php if($publicacion->act_megusta == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Me Gusta! <i class="thumbs outline up icon"></i><i class="thumbs outline down icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_comentarios"  type="checkbox"  <?php if($publicacion->act_comentarios == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Comentarios <i class="comments icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_valoracion" type="checkbox"  <?php if($publicacion->act_valoracion == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Valoracion <i class="empty star icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_comparte" type="checkbox"  <?php if($publicacion->act_comparte == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Compartir <i class="share alternate icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_graficos" type="checkbox"  <?php if($publicacion->act_graficos == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Graficos / Puntajes  <i class="bar chart icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_evaluacion" type="checkbox"  <?php if($publicacion->act_evaluacion == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Evaluacion / Voto  <i class="pointing up icon"></i> <i class="empty star icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_recursos" type="checkbox"  <?php if($publicacion->act_recursos == "on"){echo 'checked="checked"';}?>>
    <label>Mostrar Recursos  <i class="file image outline icon"></i><i class="file video outline icon"></i><i class="file pdf outline icon"></i></label>
    </div>
    </div>

    <div class="inline field">
    <div class="ui toggle checkbox">
    <input class="hidden" tabindex="0" name="act_regresiva" type="checkbox"  <?php if($publicacion->act_regresiva == "on"){echo 'checked="checked"';}?>>
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
          <button class="ui red button" href="/admin/publicaciones/{{ $publicacion->id }}">Cancelar</button>
        </div>
    </form>
@endsection
