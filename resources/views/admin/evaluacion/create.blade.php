<?php $seccion = 'evaluacion'; ?>
@extends('admin/dashboard')
@section('titulo','Nueva Evaluacion')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  @if(isset($publicacion))
  Crear Evaluacion para Publicacion "{{ $publicacion->titulo }}"
  @endif
  @if(isset($competencia))
  Crear Evaluacion para Competencia "{{ $competencia->nombre }}"
  @endif
</h4>
    <form action="/admin/evaluacion" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text">
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" >
        </div>
        <div class="field">
            <label>Fecha de Termino</label>
            <input name="f_termino" class="datetimepicker" type="text" >
        </div>
        <div class="field">
            <label>Instrucciones</label>
            <input name="instrucciones" placeholder="Instrucciones" type="text" >
        </div>
        @if(isset($publicacion))
        <input name="publicaciones_id" type="hidden" value="{{ $publicacion->id }}" >
        @endif
        @if(isset($competencia))
        <input name="competencia_id" type="hidden" value="{{ $competencia->id }}" >
        @endif


    <div class="field">
      <label>Tipo de Evaluacion</label>
      <select class="ui fluid dropdown" name="tipo_evaluacion" id="tipo_evaluacion" onchange="des_votacion(event);">
        @forelse($tipo_evaluacion as $tipos_eval)
        <option value="{{$tipos_eval->id}}" id="{{$tipos_eval->id}}">{{$tipos_eval->clasificacion}}</option>
        @empty
        <option value="NULL">Sin Tipos de Evaluacion Aun</option>
        @endforelse
      </select>
    </div>

    <script>
    function des_votacion(event)
    {
        var seleccionado = $('select[id=tipo_evaluacion]');
        var id_sel=seleccionado.val();

        if($('#'+id_sel+'').text()=="votacion"){
          $("#sino_votacion").css("display","none");
        }
        else
        {
          $("#sino_votacion").css("display","block");
      }
    }

    </script>

<span id="sino_votacion">
    <div class="field">
      <label>Cantidad de Items (Descriptor, Pregunta o Aseveracion)</label>
      <select class="ui fluid dropdown" name="cantidad" id="cantidad_items">
        <option value="1" >1 </option>
        <option value="2" >2</option>
        <option value="3" >3 </option>
        <option value="4" >4 </option>
        <option value="5" >5 </option>
        <option value="6" >6 </option>
        <option value="7" >7 </option>
      </select>
      <br>
      <a class="ui green button" href="javascript:agrega_input_items();">Crear / Ingresar Items</a>
    </div>

    <div class="items_eval">
    </div>
</span>

<br>
        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/publicaciones">Cancelar</a>
        </div>




    </form>
<script>

</script>
  @endsection
