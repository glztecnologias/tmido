<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>T-Mido</title>
<link type="image/x-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/favicon.ico" rel="shortcut icon" />
<link type="image/x-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/favicon.ico" rel="icon" />
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico57.png" sizes="57x57">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico72.png" sizes="72x72">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico76.png" sizes="76x76">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico114.png" sizes="114x114">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico120.png" sizes="120x120">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico144.png" sizes="144x144">
<link rel="apple-touch-icon" href="http://www.teohilfe.cl/clientes/tmido/imag/ico152.png" sizes="152x152">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link href="http://www.teohilfe.cl/clientes/tmido/css/tmido.css" rel="stylesheet" type="text/css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/tooltipster.css" rel="stylesheet" type="text/css" />
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery-1.11.3.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/Selectyze.jquery.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	//tooltip
	$('.tooltip').tooltipster({
		position: 'right',
		contentAsHTML: true
	});
});
</script>
<style>
.fichaCategoria
{
	float:right;
	color:black;
	font-size:11px;
}

</style>

</head>

<body>
<div id="menuTop">
	<div id="menu">
    <section>

<a href="index.php">Inicio</a>
<a href="javascript:void(0);">T-Mido</a>
<a href="javascript:void(0);">Directorio de Mediciones</a>
<a href="javascript:void(0);">Noticias</a>
<a href="javascript:void(0);">Contacto</a>
    </section>
    </div>
</div>

<header>
  <div id="header"> <a href="index.php"><img src="http://www.teohilfe.cl/clientes/tmido/imag/header_logo.png" width="359" height="55" alt="T-MIDO" class="head_logo"></a>
    <form method="post" enctype="multipart/form-data">
      <label for="email">email:</label>
      <input name="email" type="text" required id="email">
      <label for="clave">clave:</label>
      <input type="text" name="clave" id="clave" required>
      <input name="botonOpina" type="image" id="botonOpina" src="http://www.teohilfe.cl/clientes/tmido/imag/icono_opina.png" alt="Opina!" class="head_form_boton">
    </form>
    <a href="#" title="Regístrate y di lo que piensas" class="head_registrar"><i class="fa fa-chevron-right" style="font-size:8px;margin:0 4px 0 0"></i> Regístrate y di lo que piensas!</a> </div>
</header>
<div id="cinta" class="cintaHome">
  <div id="cintaBuscador">
    <form>
      <input name="search" type="text" id="search" class="cinInput" required>
      <select name="categoria" size="1" id="categoria" class="selectyze">
        <option value="all">Todas las categorias</option>
@foreach($categorias as $categoria)
				<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>

@endforeach
      </select>
      <input type="image" name="botonBuscar" id="botonBuscar" src="http://www.teohilfe.cl/clientes/tmido/imag/boton_buscar.png" class="cinButton">
    </form>
  </div>
</div>
<!--contenedor-->
<div id="contenedor">

<hr noshade class="hr_home">
<div id="orangeCinta">
	<div id="orangeMensaje">
    <img src="http://www.teohilfe.cl/clientes/tmido/imag/ico_exclamacion.png" width="5" height="21" alt="!">
    <p class="orangeGanador">Ganador del Mes</p>
@forelse($usuarios_ranking as $ganador=> $nom)
		<p>{{$ganador+1}}.- {{$nom['nombres']}} {{$nom['apellidos']}}</p>
  <!--  <p>2.- Manuel Segundo Albornoz</p>
    <p>3.- Wolfgang Siegfried Peña</p>-->
		@empty
		  <p>Proximamente!</p>
		@endforelse
		<a href="javascript:void(0);">ver ranking del mes y premios</a>
    </div>
</div>
    <div id="contenido"  class="clearfix fondoHome">
        <!--BANNER-->
        <div id="banner">
        	<a href="javascript:void(0);" target="_blank"><img src="http://www.teohilfe.cl/clientes/tmido/imag/banner_vertical.jpg" width="119" height="588" alt="banner vertical"></a>
        </div>
        <!--BANNER END-->

    <div id="homeLeft">
    <h1><i class="fa fa-star tituloStar"></i>Destacados</h1>

@forelse($publicaciones as $publicacion)
    <div class="ficha">
         <img src="{{ $publicacion->url_foto }}" alt="" style="height:141px">
         <section  style="background: {{ $publicacion->categoria->descripcion }} none repeat scroll 0% 0%;">
         <p class="fichaNombre">{{ $publicacion->titulo }}</p>
         <p class="fichaPregunta">{{ $publicacion->descripcion_corta }}</p>
      </section>
         <p class="fichaVisitas">{{ $publicacion->contador }} Visitas
				<span class="fichaCategoria">{{ $publicacion->categoria->nombre }}</span>
				 </p>

         <a href="/publicaciones/{{ $publicacion->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
   </div>
@empty
  <h1>Sin publicaciones</h1>
@endforelse

<!--
       <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_burgos.jpg" alt="Ministro Jorge Burgos">
            <section class="fichaBackground1">
            <p class="fichaNombre">Ministro Jorge Burgos</p>
            <p class="fichaPregunta">¿Buen desempeño ante catástrofe en el norte?</p>
         </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

        <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_bolocco.jpg" alt="Cecilia Bolocco">
            <section class="fichaBackground2">
            <p class="fichaNombre">Cecilia Bolocco</p>
            <p class="fichaPregunta">¿Estaba Enamorada de Menem?</p>
            </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
        </div>

        <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_vidal.jpg" alt="Arturo Vidal">
            <section class="fichaBackground3">
            <p class="fichaNombre">Arturo Vidal</p>
            <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
        </div>

   <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_sanchez.jpg" alt="Alexis Sánchez">
            <section class="fichaBackground3">
            <p class="fichaNombre">Alexis Sánchez</p>
            <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

   <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_diaz.jpg" alt="Pamela Díaz">
            <section class="fichaBackground2">
            <p class="fichaNombre">Pamela Díaz</p>
            <p class="fichaPregunta">¿Se casaría con ella?</p>
        </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

        <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_pirenia.jpg" alt="sebastián Piñera">
            <section class="fichaBackground1">
            <p class="fichaNombre">Sebastián Piñera </p>
            <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>
      <a href="javascript:void(0);"><img src="http://www.teohilfe.cl/clientes/tmido/imag/banner_horizontal.jpg" width="511" height="65" alt="Banner" class="banner"></a>

      <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_burgos.jpg">
            <section class="fichaBackground1">
            <p class="fichaNombre">Ministro Jorge Burgos</p>
            <p class="fichaPregunta">¿Buen desempeño ante catástrofe en el norte?</p>
         </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

        <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_bolocco.jpg">
            <section class="fichaBackground2">
            <p class="fichaNombre">Cecilia Bolocco</p>
            <p class="fichaPregunta">¿Estaba Enamorada de Menem?</p>
            </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
        </div>

        <div class="ficha">
            <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_vidal.jpg">
            <section class="fichaBackground3">
            <p class="fichaNombre">Arturo Vidal</p>
            <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </section>
            <p class="fichaVisitas">250.000 Visitas</p>
            <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
        </div>
-->
      </div>

    <div id="homeRight">
    <h1><i class="fa fa-thumbs-up tituloPulgar"></i>Opinión: Números y estadísticas</h1>
    <div id="homeRightGraph">
    <section>
      <img src="http://www.teohilfe.cl/clientes/tmido/imag/grafico_anillo.png" width="150">
      <h3>Votantes por edad</h3>
      <a href="#">ver más...</a>
      </section>
      <section>
      <img src="http://www.teohilfe.cl/clientes/tmido/imag/grafico_barra.png" width="150" >
      <h3>Político más rechazado</h3>
      <a href="#">ver más...</a>
      </section></div>
    <h1><i class="fa fa-thumbs-up tituloPulgar"></i>Más Valorados</h1>
        <div class="ficha">
        <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_delrio.jpg" alt="Tolerancia Cero">
        <section class="fichaBackground2">
        <p class="fichaNombre">Tolerancia Cero</p>
        <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>
        <p class="fichaK"><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i>200 k</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a></div>

        <div class="ficha">
        <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_davalos.jpg" alt="Sebastián Dávalos">
        <section class="fichaBackground1">
        <p class="fichaNombre">Sebastián Dávalos</p>
        <p class="fichaPregunta">¿Aprovechaba su condición de hijo para beneficio propio?</p>
        </section>
        <p class="fichaK"><i class="fa fa-thumbs-up tituloPulgar"></i> 100 k</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

      <div class="ficha">
        <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_bachelet.jpg" alt="Michelle Bachelet">
        <section class="fichaBackground1">
        <p class="fichaNombre">Michelle Bachelet</p>
        <p class="fichaPregunta">¿Estaba enamorada de Menem?</p>
        </section>
        <p class="fichaK"><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i>200 k</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>

        <div class="ficha">
        <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_meo.jpg" alt="ME-O">
        <section class="fichaBackground1">
        <p class="fichaNombre">ME-O</p>
        <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>
        <p class="fichaK"><i class="fa fa-thumbs-up tituloPulgar"></i>100 k</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
      </div>
    </div>

    </div>
</div>

<!--FOOTER-->
<footer>
<div id="footer"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/rectangulo_verdoso.png" alt="rectangulo verde" class="pieRectangulo"> <a href="index.php"><img src="http://www.teohilfe.cl/clientes/tmido/imag/footer_logo.png" width="310" height="47" alt="T-mido: Mide lo que la gente le interesa" class="pieLogo"></a>
  <section class="pieFrase">
    <p>INTEGER TEMPUS JUSTO MASSA, NEC VOLUTPAT NIBH TEMPOR EGET</p>
  </section>
  <section class="pieMenu">

<a href="index.php">Inicio</a>
<a href="javascript:void(0);">T-Mido</a>
<a href="javascript:void(0);">Directorio de Mediciones</a>
<a href="javascript:void(0);">Noticias</a>
<a href="javascript:void(0);">Contacto</a>
  </section>
  <img src="http://www.teohilfe.cl/clientes/tmido/imag/footer_dialogo.png" width="110" height="86" alt="grafico dialogo" class="pieDialogo">
  <p class="pieDerechos">Derechos Reservados 2001-2015<br>
    T-mido.com Derechos de Contenido Reservados </p>
  <div id="footerSocial"> <a href="http://www.vigaworks.com" target="_blank"><img src="http://www.teohilfe.cl/clientes/tmido/imag/footer_vigaworks.png" width="198" height="9" alt="Vigaworks" class="pieVigaworks"></a>
    <p class="pieSocial">Síguenos en Redes sociales</p>
    <a href="http://twitter.com" target="_blank"><img src="http://www.teohilfe.cl/clientes/tmido/imag/icono_twitter.png" alt="Twitter" class="pieImagMargin"></a> <a href="http://www.facebook.com" target="_blank" style="margin-right:75px;"><img src="http://www.teohilfe.cl/clientes/tmido/imag/icono_facebook.png" alt="Facebook" class="pieImagMargin"></a> <a href="mailto:info@t-mido.com" title="escríbenos!" class="pieLinkDireccion">info@t-mido.com</a> <a href="#" title="Lee sobre nuestras políticas de privacidad" class="pieLinkDireccion">políticas de privacidad</a> </div>
  <!--END-->
</div>
<div id="rayaVerde">
  <div id="contenedorRaya">
    <div id="rayaVerdeClaro"></div>
  </div>
</div>
</footer>

</body>
</html>
