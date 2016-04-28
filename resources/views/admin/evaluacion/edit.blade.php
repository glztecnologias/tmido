<?php $seccion = 'evaluacion'; ?>
@extends('admin/dashboard')
@section('titulo','Nueva Evaluacion')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Editar Evaluacion de Publicacion "{{ $publicacion->titulo }}"
</h4>
    <form action="/admin/evaluacion" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" value="{{ $evaluacion->nombre }}">
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" value="{{ $evaluacion->descripcion }}" >
        </div>
        <div class="field">
            <label>Instrucciones</label>
            <input name="instrucciones" placeholder="Instrucciones" type="text" value="{{ $evaluacion->instrucciones }}" >
        </div>

            <input name="publicaciones_id" type="hidden" value="{{ $publicacion->id }}" >

    <div class="field">
      <label>Tipo de Evaluacion</label>
      <select class="ui fluid dropdown" name="tipo_evaluacion">
        @forelse($tipos_evaluacion as $tipos_eval)

        @if($tipos_eval->id == $evaluacion->tipo_evaluacion_id)
        <option value="{{$tipos_eval->id}}"  selected="selected">{{$tipos_eval->nombre}} </option>
        @else
        <option value="{{$tipos_eval->id}}">{{$tipos_eval->nombre}} </option>
        @endif
        @empty
        <option value="NULL">Sin Tipos de Evaluacion Aun</option>
        @endforelse
      </select>
    </div>
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
