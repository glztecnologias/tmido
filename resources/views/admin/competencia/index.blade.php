<?php $seccion = 'competencias'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de competencias')
@section('contenido_admin')

          <a  class="ui green button" href="/admin/competencias/create" style="float:right"><i class="add circle icon"></i> Crear Nueva</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Competencias
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>#ID</th>
              <th>Nombre</th>
              <th>Sufijo de Titulo</th>
              <th>Descripcion</th>
              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
              <!--AQUI LA LISTA DE CATEGORIAS-->
              @forelse($competencias as $competencia)
              <tr>
              <td>{{ $competencia->id }}</td>
              <td>{{ $competencia->nombre }}</td>
              <td>{{ $competencia->sufijo_titulo }}</td>
              <td>{{ $competencia->descripcion }}</td>
              <td>
                <form action="/admin/competencias/{{ $competencia->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="mini ui button" href="/admin/competencias/{{ $competencia->id }}/edit"><i class="edit blue icon"></i> Editar</a>
                    <button class="mini ui button" type="submit" ><i class="remove red icon"></i> Eliminar</button>
                </form>
                <br>

                <form action="/admin/evaluacion/null/{{ $competencia->id}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a  class="mini ui blue button" href="/admin/evaluacion/null/{{ $competencia->id}}/create/" style="float:right"><i class="add circle icon"></i>Evaluacion</a>
                    <a  class="mini ui blue button" href="/admin/evaluacion/null/edit/{{ $competencia->id}}" style="float:right"><i class="edit icon"></i>Evaluacion</a>
                    <button class="mini ui button" type="submit" ><i class="remove red icon"></i>Evaluacion</button>
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
