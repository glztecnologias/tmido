<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administracion T-Mido</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.js"></script>
  </head>
  <body>
    <div class="ui container">
      <br>
      <div class="ui secondary menu">
        <img src="http://www.teohilfe.cl/clientes/tmido/imag/header_logo.png" alt="T-MIDO" class="head_logo" height="30" >
        <div class="header item">ADMINISTRACION</div>
        <div class="right menu">
          <div class="item">
            Bienvenido :&nbsp;<a href=""><strong>NombreUsuario</strong></a>
          </div>
          <a class="ui inverted red button">Salir  <i class="sign out icon"></i> </a>
        </div>
      </div>
      <div class="ui divider"></div>
      <br>
      <div class="ui grid">
        <div class="four wide column">
          <div class="ui secondary vertical pointing fluid menu">
            <a class="item" href="/admin">
              Inicio
            </a>
            <a class="item active" href="/admin/publicaciones">
              Publicaciones
            </a>
            <a class="item">
              Usuarios
            </a>
            <a class="item">
              Estadisticas
            </a>
            <a class="item">
              Otros
            </a>
          </div>
        </div>
        <div class="twelve wide column"> <!--Contenido-->

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
              <th>Visitas</th>

              <th style="width: 260px;">Aciones</th>
            </tr></thead>
            <tbody>
                @foreach($publicaciones as $publicacion)
              <tr>
                <td><img src="{{ $publicacion->url_foto }}" height="20"></td>
                <td>{{ $publicacion->titulo }}</td>
                <td>{{ $publicacion->descripcion_corta }}</td>
                <td>{{ $publicacion->contador }}</td>
                <td>


                  <form action="/admin/publicaciones/{{ $publicacion->id }}" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <a class="mini ui button" href="/admin/publicaciones/{{ $publicacion->id }}"><i class="unhide black icon"></i> Ver</a>
                      <a class="mini ui button" href="/admin/publicaciones/{{ $publicacion->id }}/edit"><i class="edit blue icon"></i> Editar</a>
                      <button class="mini ui button" type="submit" ><i class="remove red icon"></i> Eliminar</button>
                  </form>

                </td>
              </tr>
                @endforeach
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

  </div>
  </div>
  </div>
  </div>

  </body>
</html>
