<?php $seccion = 'tipo_evaluacion'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de Tipo_evaluacion')
@section('contenido_admin')

          <a  class="ui green button" href="/admin/tipo_evaluacion/create" style="float:right"><i class="add circle icon"></i> Crear Nueva</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Tipo_evaluacion
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>Codigo_Nombre</th>
              <th>Descripcion</th>

              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
              <!--AQUI LA LISTA DE CATEGORIAS-->
              @forelse($tipo_evaluacion as $t_eval)
              <tr>
              <td>{{ $t_eval->clasificacion }}</td>
              <td>{{ $t_eval->descripcion }}</td>
              <td>
                <form action="/admin/tipo_evaluacion/{{ $t_eval->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="mini ui button" href="/admin/tipo_evaluacion/{{ $t_eval->id }}/edit"><i class="edit blue icon"></i> Editar</a>
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
