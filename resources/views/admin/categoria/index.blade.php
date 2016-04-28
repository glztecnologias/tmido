<?php $seccion = 'categorias'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de categorias')
@section('contenido_admin')

          <a  class="ui green button" href="/admin/categorias/create" style="float:right"><i class="add circle icon"></i> Crear Nueva</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Categorias
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>Nombre</th>
              <th>Nombre en URL</th>
              <th>Color</th>
              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
              <!--AQUI LA LISTA DE CATEGORIAS-->
              @forelse($categorias as $categoria)
              <tr>
              <td>{{ $categoria->nombre }}</td>
              <td>{{ $categoria->nombre_url }}</td>
              <td><div style="border:1px solid gray;background-color:{{ $categoria->descripcion }};width:20px;height:20px;"></div></td>
              <td>
                <form action="/admin/categorias/{{ $categoria->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="mini ui button" href="/admin/categorias/{{ $categoria->id }}/edit"><i class="edit blue icon"></i> Editar</a>
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
