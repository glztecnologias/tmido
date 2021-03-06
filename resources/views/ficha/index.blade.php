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
  @if($publicacion->competencia->tipo=='normal')
        <!--COMPETENCIA-->
        <div id="fichaMultiple">
            <h2>{{$publicacion->competencia->nombre}}</h2>
            <a href="javascript:void(0);" class="carruselPrev">Previo</a>

            <div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 944px;" id="carrusel">
            <ul style="margin: 0px; padding: 0px; position: relative; list-style: outside none none; z-index: 1; width: 3068px; left: -944px;">
            @forelse($competidores as $competidor)
                <li style="overflow: hidden; float: left; width: 81px; height: 90px;">

                  <a  href="/publicaciones/{{ $competidor->id }}" class="tooltip tooltipstered" title="Ver ficha de {{ $competidor->titulo }}">
                      <img src="{{ $competidor->url_foto }}" >
                  </a>

                  @if($competidor->competencia->evaluacion->tipo_evaluacion->clasificacion=='votacion')
                  <a style="margin-top: 73px;text-transform: none;background-color: rgb(212, 45, 44);" href="/evaluacion/{{ $competidor->id }}/competencia/{{ $competidor->competencia->id }}" class="tooltip fichaEvalua tooltipstered cboxElement" title="Vota directamente a  {{ $competidor->titulo }}">Vota Ahora!</a>

                  @else
                  <a style="margin-top: 73px;text-transform: none;background-color: rgb(212, 45, 44);" href="/evaluacion/{{ $competidor->id }}/competencia/{{ $competidor->competencia->id }}" class="tooltip fichaEvalua tooltipstered cboxElement" title="Evalua directamente a  {{ $competidor->titulo }}">Evaluar Ahora!</a>

                  @endif



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
  @if($publicacion->competencia->tipo=='masiva')
       <div style="width: 864px;">
      <br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Competencia Masiva : {{$publicacion->competencia->nombre}}</h2><br><hr>
    </div>
  @endif
@endif

    <div id="fichaLeft" class="clearfix">
      <h2><i class="fa fa-star tituloStar"></i>Categoria / {{ $publicacion->categoria->nombre }}</h2>
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
        </div>


        <div id="fichaVideoSeccion">
@if($publicacion->act_recursos == 'on')
          <section>
            <a href="http://michellebachelet.cl/pdf/50medidasMB.pdf" class="botonFicha number1 verPDF tooltip" title="<span class='tituloPDF'>Archivo PDF:</span> Titulo_dinamico_aca">Archivos PDF</a>
            <a href="#" class="botonFicha number2">Presentación Power Point</a>
            <a href="#" class="botonFicha number3">Audio</a>
            <a href="#" class="botonFicha number4">Video</a>
          </section>
  @endif
@if($publicacion->act_evaluacion == 'on')

     @if($publicacion->act_regresiva == 'on')
          <p class="fichaTime"><span>Cierre de Evaluacion en:</span><br>
          <span class="regresiva"></span>
          </p>
     @endif

  @if($publicacion->competencia_id == null)

  <a href="/evaluacion/{{ $publicacion->id }}" class="fichaEvalua" title="Evalua a {{ $publicacion->titulo }}!">Evalua tú también</a>

  @else

    @if($publicacion->competencia->tipo=='masiva')

    <a href="/evaluacion/{{ $publicacion->id }}/competencia/{{ $publicacion->competencia->id }}" class="fichaEvalua tooltip" title="Evalua a {{ $publicacion->titulo }}!">Evalua tú también</a>

    @else
          @if($publicacion->competencia->evaluacion->tipo_evaluacion->clasificacion=='votacion')
            <a href="/evaluacion/{{ $publicacion->id }}/competencia/{{ $publicacion->competencia->id }}" class="fichaEvalua tooltip" title="Evalua a {{ $publicacion->titulo }}!">Vota Aqui!</a>
          @else
          <a href="/evaluacion/{{ $publicacion->id }}/competencia/{{ $publicacion->competencia->id }}" class="fichaEvalua tooltip" title="Evalua a {{ $publicacion->titulo }}!">Evalua tú también</a>
          @endif
    @endif

  @endif
@endif
        </div>
      </div>


      <div id="fichaComentarios">
        <section class="clearfix">
          @if($publicacion->act_valoracion == 'on')
          <p class="comentariosRanking">
            <span class="valoracion" ></span>&nbsp;&nbsp;
            <span id="n_valoracion" class="n_val_estrella"></span>&nbsp;&nbsp;
            <span><a class="boton_val_general" href="#">Quiero Valorar!</a></span>
          </p>
          @endif

          <p class="comentariosVisitas">{{ $publicacion->contador }} Visitas</p>
          <p class="comentariosUser">Usuario: <span>Juan sin Tierra</span></p>
          <br>
          <p class="">
            {{ $publicacion->descripcion_corta }}<br>
            {{ $publicacion->descripcion_larga }}
          </p>
        </section>
        <section class="clearfix">
@if($publicacion->act_megusta == 'on')
          <span class="mg_nomg">
          <a href="javascript:voto_gusto({{ $publicacion->id }},'si');"><p class="comentarioPublico"><i class="fa fa-thumbs-up pulgarUp"></i> {{ $publicacion->megusta }}</p></a>
          <a href="javascript:voto_gusto({{ $publicacion->id }},'no');"><p class="comentarioPublico"><i class="fa fa-thumbs-down pulgarDown"></i> {{ $publicacion->nomegusta }}</p></a>
        </span>
@endif
          <p class="comentarioFecha">Publicado el {{ $publicacion->f_inicio }}</p>
        </section>
    @if($publicacion->act_comparte == 'on')
        <section class="clearfix">
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
          </script>
          <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
          </script>
          <div class="fb-share-button" data-href="http://www.t-mido.cl/publicaciones/{{ $publicacion->id }}" data-layout="button_count" style="top: -5px;"></div>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.t-mido.cl/publicaciones/{{ $publicacion->id }}" data-lang="es">Twittear</a>

          <!-- Place this tag where you want the share button to render. -->
          <div class="g-plus" data-action="share" data-annotation="bubble"></div>

          <!-- Place this tag after the last share tag. -->
          <script type="text/javascript">
            window.___gcfg = {lang: 'es-419'};

            (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/platform.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
          </script>

           <!--<img src="/imag/dummie_socialmedia.png" width="250" height="24" alt="dummie socialmedia" style="margin-left:3px;">-->

         </section>
@endif
        <!--COMENTARIOS-->


@if($publicacion->act_comentarios == 'on')
        <div id="comentarios">


          <section class="comentarioPrincipal">

  @if($datos_user = session('usuario'))
              <img src="{{ $datos_user->url_foto }}" width="40" height="40"  class="comentarioUsuario">
  @else
              <img src="/imag/user.png" width="40" height="40" class="comentarioUsuario">
  @endif

              <p class="comentarioOpinion">¿Qué opinas?</p>

              <form enctype="multipart/form-data" class="clearfix">
                {!! csrf_field() !!}
                <textarea name="comentario" id="comentario" required></textarea>
  @if($datos_user)
                <input type="hidden" name="id_usuario" id="id_usuario" value="{{ $datos_user->id }}">
  @endif
                <!--<input type="file" name="archivo" id="archivo" class="comentarioFile">-->
                <a  href="javascript:comentar();" style="float: right;" class="">Enviar</a>
              </form>


            <img src="/imag/icono_triangulo_comentarios.png" width="25" height="19" alt="triangulo" class="comentarioTriangulo">
          </section>


<span class="cont_comentarios">
@forelse($comentarios as $com)
<section>
  <p class="comentarioUsuarioResponde">{{ $com->cuenta_usuario->nombres }} {{ $com->cuenta_usuario->apellidos }}</p>

  <img src="{{ $com->cuenta_usuario->url_foto }}" width="40" height="40" class="comentarioUsuario">

  <div class="comentarioDeUsuario">
<time class="timeago" datetime="{{ $com->created_at}}" title="{{ $com->created_at}}"></time>
<br>
<span class="comentario">
{{ $com->contenido }}

<!--<a href="#" class="comentarioLeeMas">Ver más...</a>-->
</div>
</span>
  <div class="comentarioAccion">
    <a href="javascript:voto_gusto_comenta({{ $com->id }},'no');"><p class="comentarioNegativo"><i class="fa fa-thumbs-down pulgarDown"></i>{{ $com->nomegusta }}</p></a>
    <a href="javascript:voto_gusto_comenta({{ $com->id }},'si');"><p class="ComentarioPositivo"><i class="fa fa-thumbs-up pulgarUp"></i>{{ $com->megusta }}</p></a>
  <!--  <a href="#" class="comentarioResponder">Responder</a> --></div>
</section>
@empty

@endforelse

          <a href="javascript:void(0);" class="comentarioMas">Ver más comentarios</a>
</span>


         <!--CIERRE SACAR ESTE COMENTARIO-->
</div>
@else

<strong style="margin-left:10px;">Esta publicacion no permite Comentarios...</strong>
@endif


      </div>

      @if($publicacion->act_graficos == 'on')
      <div id="fichaStats">
        <!--<h3>Estadísticas en Tiempo Real</h3>-->
        <section >
          <div id="graf1_ficha" style="max-width:250px;margin-left:35px; height:250px;">

          </div>
        </section>
        <section>
          <div id="graf2_ficha" style="max-width:310px;">

          </div>
        </section>

        @if($publicacion->competencia_id == null)
        <a href="/graficos/{{$publicacion->id}}" class="verGraficos tooltip" title="ver graficos evaluaciones">Ver Gráficos & Puntajes de Evaluaciones</a> </div>
        @else
        <a href="/graficos/{{$publicacion->id}}/competencia/{{ $publicacion->competencia->id }}" class="verGraficos tooltip" title="ver graficos evaluaciones">Ver Gráficos & Puntajes de Evaluaciones</a> </div>

        @endif



@endif

    </div>
    <div id="fichaRight">
      <h2>Más mediciones<br>
        <span style="text-transform:none;"> DE </span> {{ $publicacion->categoria->nombre }}</h2>
@forelse($otras_pub_categoria as $otras)
      <div class="ficha"> <img src="{{$otras->url_foto}}" alt="Alexis Sánchez">
        <section class="fichaBackground3" style="background: {{ $otras->categoria->descripcion }} none repeat scroll 0% 0%;">
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
