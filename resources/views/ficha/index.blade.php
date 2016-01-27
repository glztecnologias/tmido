<?php $seccion = 'ficha'; ?>
@extends('layouts/master')
@section('titulo',$publicacion->titulo)
@section('contenido')
<!--contenedor-->
<div id="contenedor">
  <hr noshade class="hr_home">
  <div id="contenido"  class="clearfix fondoFicha">

@if($publicacion->competencia_id == null)
@else
<!--COMPETENCIA-->
<div id="fichaMultiple">
    <h2>Discursos Presidenciales 2015</h2>
    <a href="javascript:void(0);" class="carruselPrev">Previo</a>

    <div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 944px;" id="carrusel">
    <ul style="margin: 0px; padding: 0px; position: relative; list-style: outside none none; z-index: 1; width: 3068px; left: -944px;">
    @forelse($competidores as $competidor)
        <li style="overflow: hidden; float: left; width: 81px; height: 90px;">
          <a href="/publicaciones/{{ $competidor->id }}" class="tooltip tooltipstered">
            <span>¡Evalua!</span></a>
          <img src="{{ $competidor->url_foto }}">
        </li>
    @empty
             <span>Sin publicaciones</span>
    @endforelse
    </ul>
    </div>
    <a href="javascript:void(0);" class="carruselNext">Siguiente</a>
</div>
<!--##############-->
@endif



    <div id="fichaLeft" class="clearfix">
      <h2><i class="fa fa-star tituloStar"></i>Publicaciones / {{ $publicacion->categoria->nombre }}</h2>
@if($publicacion->competencia_id == null)
<h1>{{ $publicacion->titulo }}</h1>
@else
<h1>
  {{ $publicacion->competencia->sufijo_titulo }}:
<span class="rojo">{{ $publicacion->titulo }}</span>
</h1>
@endif



      <div id="fichaVideo" class="clearfix">
        <div id="mediaContenedor">
          <div id="foto-container">
            <img src="{{ $publicacion->url_foto }}">
          </div>
          <div id="video-container" class="hide">

            <iframe width="480" height="293" src="https://www.youtube.com/embed/P5_Msrdg3Hk" frameborder="0" allowfullscreen></iframe>

          </div>
          <div id="audio-container" class="hide">
            <audio controls preload="auto">
              <source src="http://www.teohilfe.cl/clientes/tmido/descargas/demo.ogg" type="audio/ogg">
              <source src="http://www.teohilfe.cl/clientes/tmido/descargas/audio.mp3" type="audio/mpeg">
              <p>Tú navegador no soporta el audio de HTML5, actualizalo por favor.</p>
            </audio>
          </div>
        </div>


        <div id="fichaVideoSeccion">
          <section>
            <a href="http://www.teohilfe.cl/clientes/tmido/visorPDF.php" class="botonFicha number1 verPDF tooltip" title="<span class='tituloPDF'>Archivo PDF:</span> Titulo_dinamico_aca">Archivos PDF</a>
            <a href="#" class="botonFicha number2">Presentación Power Point</a>
            <a href="#" class="botonFicha number3">Audio</a>
            <a href="#" class="botonFicha number4">Video</a>
          </section>
          <p class="fichaTime"><span>QUEDAN:</span><br>
            10 días y 5 horas para terminar evaluación</p>
          <a href="pool.php" class="fichaEvalua tooltip" title="<span class='tituloPDF'>Política:</span> Discurso de la Presidenta el 21 de mayo">Evalua tú también</a> </div>
      </div>


      <div id="fichaComentarios">
        <section class="clearfix">
          <p class="comentariosRanking"><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star-half-o estrellita"></i></p>
          <p class="comentariosVisitas">{{ $publicacion->contador }} Visitas</p>
          <p class="comentariosUser">Usuario: <span>Juan sin Tierra</span></p>
          <p class="">
            {{ $publicacion->descripcion_corta }}<br>
            {{ $publicacion->descripcion_larga }}
          </p>
        </section>
        <section class="clearfix">
          <p class="comentarioPublico"><i class="fa fa-thumbs-up pulgarUp"></i> 100</p>
          <p class="comentarioPublico"><i class="fa fa-thumbs-down pulgarDown"></i> 100</p>
          <p class="comentarioFecha">Publicado el 10 de julio de 2015</p>
        </section>
        <section class="clearfix"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/dummie_socialmedia.png" width="250" height="24" alt="dummie socialmedia" style="margin-left:3px;"> </section>

        <!--COMENTARIOS-->
        <div id="comentarios">
          <section class="comentarioPrincipal"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/user1.jpg" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">
            <p class="comentarioOpinion">¿Qué opinas?</p>
            <form enctype="multipart/form-data" class="clearfix">
              <textarea name="comentario" required></textarea>
              <input type="file" name="archivo" id="archivo" class="comentarioFile">
              <input type="submit" name="botonComentario" id="botonComentario" value="Enviar" class="botonComentario">
            </form>
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/icono_triangulo_comentarios.png" width="25" height="19" alt="triangulo" class="comentarioTriangulo"></section>
          <section>
            <p class="comentarioUsuarioResponde">Arturo Prat</p>
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/user2.jpg" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">
            <div class="comentarioDeUsuario"> alberto zamoraHace 2 horas<br>
              aca en chile tenemos a varios udi igual que lopez y andan libres por las calles,incluso algunos sediciosos se postulan para alcaldes. Manuel Rodriguez La presidenta Bachelet y su gobierno en silencio ,haciendose complice de las burradas de Maburro.
              Ella defiende solo los DDHH de izquierda. <a href="#" class="comentarioLeeMas">Ver más...</a></div>
            <div class="comentarioAccion">
              <p class="comentarioNegativo"><i class="fa fa-thumbs-up pulgarDown"></i> 870</p>
              <p class="ComentarioPositivo"><i class="fa fa-thumbs-up pulgarUp"></i> 100</p>
              <a href="#" class="comentarioResponder">Responder</a> </div>
          </section>
          <section>
            <p class="comentarioUsuarioResponde">Ambrosio O'Higgins</p>
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/user3.jpg" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">
            <div class="comentarioDeUsuario"> La presidenta Bachelet y su gobierno en silencio ,haciendose complice de las burradas de Maburro.<br>
              Ella defiende solo los DDHH de izquierda. La presidenta Bachelet y su gobierno en silencio ,haciendose complice de las burradas de Maburro. <br>
              Ella defiende solo los DDHH de izquierda. <a href="#" class="comentarioLeeMas">Ver más...</a></div>
            <div class="comentarioAccion"> <a href="#" class="comentarioAdjunto">Ver adjunto</a>
              <p class="comentarioNegativo"><i class="fa fa-thumbs-up pulgarDown"></i> 870</p>
              <p class="ComentarioPositivo"><i class="fa fa-thumbs-up pulgarUp"></i> 100</p>
              <a href="#" class="comentarioResponder">Responder</a> </div>
          </section>
          <section>
            <p class="comentarioUsuarioResponde">Manuel Rodriguez</p>
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/user4.jpg" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">
            <div class="comentarioDeUsuario"> Bacon ipsum dolor amet bacon pancetta turducken boudin beef. Porchetta landjaeger pork belly shank pork cupim. Drumstick short ribs rump, tenderloin tri-tip pork flank. T-bone venison pastrami kielbasa short ribs prosciutto sirloin landjaeger pork belly pork loin jerky bresaola tri-tip. <a href="#" class="comentarioLeeMas">Ver más...</a> </div>
            <div class="comentarioAccion"> <a href="#" class="comentarioAdjunto">Ver adjunto</a>
              <p class="comentarioNegativo"><i class="fa fa-thumbs-up pulgarDown"></i> 870</p>
              <p class="ComentarioPositivo"><i class="fa fa-thumbs-up pulgarUp"></i> 100</p>
              <a href="#" class="comentarioResponder">Responder</a> </div>
          </section>
          <a href="javascript:void(0);" class="comentarioMas">Ver más comentarios</a>

          <!--CIERRE SACAR ESTE COMENTARIO-->
        </div>
      </div>
      <div id="fichaStats">
        <h3>Estadísticas en Tiempo Real</h3>
        <section> <img src="http://www.teohilfe.cl/clientes/tmido/imag/grafico_barra.png" width="293" height="304" alt="grafico barras"></section>
        <section> <img src="http://www.teohilfe.cl/clientes/tmido/imag/grafico_anillo.png" width="195" height="196" alt="grafico anillo"></section>
        <a href="http://www.teohilfe.cl/clientes/tmido/graficos.php" class="verGraficos tooltip" title="<span class='tituloPDF'>Política:</span> Discurso de la Presidenta el 21 de mayo">Ver todos los gráficos comparativos</a> </div>
    </div>
    <div id="fichaRight">
      <h2>Más mediciones<br>
        <span style="text-transform:none;">de </span> {{ $publicacion->categoria->nombre }}</h2>
@forelse($otras_pub_categoria as $otras)
      <div class="ficha"> <img src="{{$otras->url_foto}}" alt="Alexis Sánchez">
        <section class="fichaBackground3">
          <p class="fichaNombre">{{ $otras->titulo }}</p>
          <p class="fichaPregunta">{{ $otras->descripcion_corta }}</p>
        </section>
        <p class="fichaVisitas">{{ $otras->contador }} Visitas</p>
        <a href="/publicaciones/{{ $otras->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>
    @empty
        <h1>Sin publicaciones</h1>
    @endforelse

    </div>
    <br>
  </div>
</div>
@endsection
