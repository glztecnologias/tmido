<?php $seccion = 'competencias'; ?>
@extends('admin/dashboard')
@section('titulo','Crear Competencia')
@section('contenido_admin')

   <h4 class="ui horizontal divider header">
  <i class="add circle icon"></i>
  Crear Nueva Competencia
</h4>
    <form action="/admin/competencias" method="post" class="ui form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text">
        </div>
        <div class="field">
            <label>Subfijo de Titulo</label>
            <input name="sufijo" placeholder="Subfijo de Titulo" type="text" >
        </div>

        <div class="field">
           <label>Descripcion</label>
         <input type="text" name="descripcion" value="Descipcion de competencia">
         </div>

         <div class="field">
            <label>Tipo Competencia</label>
            <select id="tipo" name="tipo"  onchange="cantidad_aparece(event);" >
             <option value="normal" selected="selected">Normal (1-10)</option>
             <option value="masiva">Masiva</option>
           </select>
          </div>
<script>
function cantidad_aparece(event)
{

    if($('select[id=tipo]').val()=="normal"){
      $("#n_participantes").css("display","block");
    }
    if($('select[id=tipo]').val()=="masiva"){
      $("#n_participantes").css("display","none");
    }
}

</script>
          <div class="field" id="n_participantes" style="">
             <label>Cantidad Participantes</label>
             <select name="cant_participa" >
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
           </div>

        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <a class="ui red button" href="/admin/competencias">Cancelar</a>
        </div>
    </form>

  @endsection
