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
    <h3 class="">{{ $publicacion->titulo }}</h3>
    <div class="ui section divider"></div>
    <p><strong>Descripcion Corta</strong> <br> {{ $publicacion->descripcion_corta }}</p>
    <p><strong> Descripcion Larga</strong><br>{{ $publicacion->descripcion_larga }}</p>
    <p>
      <div class="ui labeled button" tabindex="0">
        <div class="ui blue button">
          <i class="unhide icon"></i>
        </div>
        <a class="ui basic blue left pointing label">
        {{ $publicacion->contador }}
        </a>
      </div>
      <div class="ui labeled button" tabindex="0">
        <div class="ui blue button">
          <i class="share alternate icon"></i>
        </div>
        <a class="ui basic blue left pointing label">
          1,5 K
        </a>
      </div>
      <div class="ui labeled button" tabindex="0">
        <div class="ui green button">
          <i class="thumbs outline up icon"></i>
        </div>
        <a class="ui basic green left pointing label">
          1,048
        </a>
      </div>
      <div class="tiny ui labeled button" tabindex="0">
        <div class="ui red button">
          <i class="thumbs outline down icon"></i>
        </div>
        <a class="ui basic red left pointing label">
          1,048
        </a>
      </div>
      <div class="tiny ui labeled button" tabindex="0">
        <div class="ui yellow button">
          <i class="star icon"></i>
        </div>
        <a class="ui basic yellow left pointing label">
          6,5
        </a>
      </div>
    </p>

<div class="ui section divider"></div>
    <form action="/admin/publicaciones/{{ $publicacion->id }}" method="post" style="float:right;">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a  class="tiny ui button" href="/admin/publicaciones"><i class="reply icon"></i> Volver</a>
        <a  class="tiny ui blue button" href="/admin/publicaciones/{{ $publicacion->id }}/edit"><i class="edit icon"></i> Editar</a>
        <button type="submit" class=" tiny ui red button"><i class="remove icon"></i> Eliminar</button>
    </form>




  </div>
    </div>
    </div>
    </body>
    </html>
