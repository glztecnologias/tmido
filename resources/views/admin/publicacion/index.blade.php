<?php $seccion = 'publicaciones'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de publicaciones')
@section('contenido_admin')

<div class="ui error message">
  <i class="close icon"></i>

<?php
if (isset($mensaje)){
  echo $mensaje;
}
?>

</div>
<script>
$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;
</script>

          <a  class="ui green button" href="/admin/publicaciones/create" style="float:right"><i class="add circle icon"></i> Crear Nueva</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Publicaciones
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>Foto_Ficha</th>
              <th>Titulo</th>
              <th>Descripcion Corta</th>
              <th>Nombre de Competencia ó Publ. Simple </th>
              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
                @forelse($publicaciones as $publicacion)
              <tr>
                <td><img src="{{ $publicacion->url_foto }}" height="20"></td>
                <td>{{ $publicacion->titulo }}</td>
                <td>{{ $publicacion->descripcion_corta }}</td>
@if($publicacion->competencia_id != null)
                <td>"{{ $publicacion->competencia->nombre }}"</td>
@else
                <td>Simple</td>
@endif
                <td>
                  <form action="/admin/publicaciones/{{ $publicacion->id }}" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <a class="mini ui button" href="/admin/publicaciones/{{ $publicacion->id }}"><i class="unhide black icon"></i> Ver</a>
                      <a class="mini ui button" href="/admin/publicaciones/{{ $publicacion->id }}/edit"><i class="edit blue icon"></i> Editar</a>
                      <button class="mini ui button" type="submit" ><i class="remove red icon"></i> Eliminar</button>
                  </form>
                  <br>
                  <!--<a  class="mini ui blue button" href="/admin/recursos/create" style="float:right"><i class="add circle icon"></i>Crear recurso</a>-->
@if($publicacion->competencia_id != null)

@else
<form action="/admin/evaluacion/{{ $publicacion->id}}/null" method="post">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <a  class="mini ui blue button" href="/admin/evaluacion/{{ $publicacion->id }}/null/create/" style="float:right"><i class="add circle icon"></i>Crear Evaluacion</a>
    <a  class="mini ui blue button" href="/admin/evaluacion/{{ $publicacion->id }}/null/edit/" style="float:right"><i class="edit icon"></i>Ver / Editar Evaluacion</a>
    <button class="mini ui button" type="submit" ><i class="remove red icon"></i> Eliminar Evaluacion</button>
</form>
@endif
                </td>
              </tr>
              @empty
              <h4 style="color:red;">Sin registros...</h4>
              @endforelse
            </tbody>
            <tfoot>
              <tr><th colspan="3">
                <div class="ui right floated pagination menu">
                  <a class="icon item">
                    <i class="left chevron icon"></i>
                  </a>
                  <a class="item">1</a>
                  <a class="item">2</a>
                  <a class="item">3</a>
                  <a class="item">4</a>
                  <a class="icon item">
                    <i class="right chevron icon"></i>
                  </a>
                </div>
              </th>
            </tr></tfoot>
          </table>

@endsection
