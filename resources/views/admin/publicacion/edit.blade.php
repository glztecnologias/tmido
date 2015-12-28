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

   <h4 class="ui horizontal divider header">
  <i class="edit icon"></i>
  Editar publicación
</h4>
    <form action="/admin/publicaciones/{{ $publicacion->id }}" method="post" class="ui form">
       <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>Titulo</label>
            <input name="titulo" placeholder="Titulo" type="text" value="{{ $publicacion->titulo }}">
        </div>
        <div class="field">
            <label>Descripcion Corta</label>
            <input name="descripcion_corta" placeholder="Descripcion Corta" type="text" value="{{ $publicacion->descripcion_corta }}">
        </div>
        <div class="field">
            <label>Descripcion Larga</label>
            <input name="descripcion_larga" placeholder="Descripcion Larga" type="text" value="{{ $publicacion->descripcion_larga }}">
        </div>
        <div class="field">
            <label>URL_FOTO</label>
            <input name="url_foto" placeholder="url_foto" type="text" value="{{ $publicacion->url_foto }}">
        </div>
        <div class="field">
            <label>Cant. Visitas</label>
            <input name="contador" placeholder="" type="text" value="{{ $publicacion->contador }}">
        </div>
        <div class="ui form">
          <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input tabindex="0" name="tipo"  checked="" type="radio">
            <label>Normal</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input  tabindex="0" name="tipo"  type="radio">
            <label>Competencia</label>
          </div>
        </div>
      </div>
    </div>


        <div class="ui buttons">
          <button type="submit" class="ui blue button">Guardar</button>
            <div class="or">ó</div>
          <button class="ui red button" href="/admin/publicaciones/{{ $publicacion->id }}">Cancelar</button>
</div>
    </form>

      </div>
        </div>
        </div>
        </body>
        </html>
