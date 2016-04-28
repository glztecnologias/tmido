<?php $seccion = 'tipo_recursos'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de Tipo de Recursos')
@section('contenido_admin')

          <a  class="ui green button" href="/admin/tipo_recursos/create" style="float:right"><i class="add circle icon"></i> Crear Nuevo</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Tipos de Recursos
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
              <!--AQUI LA LISTA DE CATEGORIAS-->
              @forelse($tipo_recursos as $tipo_recurso)
              <tr>
              <td>{{ $tipo_recurso->nombre }}</td>
              <td>{{ $tipo_recurso->descripcion }}</td>
              <td>
                <form action="/admin/tipo_recursos/{{ $tipo_recurso->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="mini ui button" href="/admin/tipo_recursos/{{ $tipo_recurso->id }}/edit"><i class="edit blue icon"></i> Editar</a>
                    <button class="mini ui button" type="submit" ><i class="remove red icon"></i> Eliminar</button>
                </form>

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
