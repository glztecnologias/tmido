<?php $seccion = 'estados'; ?>
@extends('admin/dashboard')
@section('titulo','Lista de estados')
@section('contenido_admin')

          <a  class="ui green button" href="/admin/estados/create" style="float:right"><i class="add circle icon"></i> Crear Nuevo</a>
          <br>
          <h4 class="ui horizontal divider header">
         <i class="list icon"></i>
        Lista de Estados
       </h4>
          <table class="ui celled table">
            <thead>
              <tr>
              <th>Nombre</th>
              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
              <!--AQUI LA LISTA DE CATEGORIAS-->
              @forelse($estados as $estado)
              <tr>
              <td>{{ $estado->nombre }}</td>

              <td>
                <form action="/admin/estados/{{ $estado->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="mini ui button" href="/admin/estados/{{ $estado->id }}/edit"><i class="edit blue icon"></i> Editar</a>
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
