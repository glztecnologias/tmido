<?php $seccion = 'tipo_evaluacion'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Tipo_evaluacion')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nuevo Tipo_evaluacion
</h4>
    <form action="/admin/tipo_evaluacion" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="field">
           <label>Clasificacion</label>
           <select id="clasificacion" name="clasificacion" >
              <option value="votacion">Votacion o Sufragio Unico</option>
              <option value="si_no">Si o No</option>
              <option value="mg_nmg">Me Gusta o No Me Gusta</option>
              <option value="valoracion1_5">Valoracion con puntuacion de 1  a 5</option>
              <option value="valoracion1_7">Valoracion con puntuacion de 1  a 7</option>
              <option value="valoracion1_10">Valoracion con puntuacion de 1  a 10</option>
            </select>
         </div>
<!--//votacion,valoracion1_5,valoracion1_7,valoracion1_10,si_no,mg_nmg-->


        <div class="field">
            <label>Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" >
        </div>


        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/tipo_evaluacion">Cancelar</a>
</div>
    </form>

  @endsection
