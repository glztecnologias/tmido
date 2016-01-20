<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Discurso de la Presidenta 21 de Mayo | T-Mido</title>
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
<link href="http://www.teohilfe.cl/clientes/tmido/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/jquery-filestyle.css" rel="stylesheet" type="text/css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/colorbox.css" rel="stylesheet" type="text/css">
<link href="http://www.teohilfe.cl/clientes/tmido/css/ranking.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://www.teohilfe.cl/clientes/tmido/css/tooltipster.css" />
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery-1.11.3.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/Selectyze.jquery.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery-filestyle.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery.colorbox-min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery.slimscroll.min.js"></script>
<script src="http://www.teohilfe.cl/clientes/tmido/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	// file Input
	$('.comentarioFile').jfilestyle({
		inputSize: '191px',
		buttonText: 'Adjuntar Archivo'
	});

	//tooltip
	$('.tooltip').tooltipster({
		position: 'right',
		contentAsHTML: true
	});

	//botones divs  audio video
	$('.number3').click(function(noLink) {
		noLink.preventDefault();
		$('#video-container').addClass('hide');
		$('#audio-container').removeClass();
	});
	$('.number4').click(function(noLink) {
		noLink.preventDefault();
		$('#audio-container').addClass('hide');
		$('#video-container').removeClass();
	});

	// colorbox
	$('.verPDF').colorbox({
		width:928,
		height:556,
		scalePhotos: false
	});

	$('.fichaEvalua').colorbox({
		width:518,
		height:410,
		scalePhotos: false,
		onComplete: function() {
			$('#cboxLoadedContent').slimScroll({
					color: '#32A19B',
					height: '380px',
					distance: '0px'
				});
			}
	});

	$('.verGraficos').colorbox({
		width:928,
		height:506,
		scalePhotos: false,
		onComplete: function() {
			$('#cboxLoadedContent').slimScroll({
					color: '#32A19B',
					size:'20px',
					height: '472px',
					distance: '0px'
				});
			}
	});

});
</script>


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
        <option value="-1">Seleccione categoría</option>
        <option value="categoría 1">Categoría 1</option>
        <option value="categoría 2">Categoría 2</option>
        <option value="categoría 3">Categoría 3</option>
      </select>
      <input type="image" name="botonBuscar" id="botonBuscar" src="http://www.teohilfe.cl/clientes/tmido/imag/boton_buscar.png" class="cinButton">
    </form>
  </div>
</div>


<!--contenedor-->
<div id="contenedor">
  <hr noshade class="hr_home">
  <div id="contenido"  class="clearfix fondoFicha">
    <div id="fichaLeft" class="clearfix">
      <h2><i class="fa fa-star tituloStar"></i>Publicaciones / {{ $publicacion->categoria->nombre }}</h2>
      <h1>{{ $publicacion->titulo }}</h1>
      <div id="fichaVideo" class="clearfix">
        <div id="mediaContenedor">
          <div id="video-container">
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
          <section> <a href="http://www.teohilfe.cl/clientes/tmido/visorPDF.php" class="botonFicha number1 verPDF tooltip" title="<span class='tituloPDF'>Archivo PDF:</span> Titulo_dinamico_aca">Archivos PDF</a> <a href="#" class="botonFicha number2">Presentación Power Point</a> <a href="#" class="botonFicha number3">Audio</a> <a href="#" class="botonFicha number4">Video</a> </section>
          <p class="fichaTime"><span>QUEDAN:</span><br>
            10 días y 5 horas para terminar evaluación</p>
          <a href="pool.php" class="fichaEvalua tooltip" title="<span class='tituloPDF'>Política:</span> Discurso de la Presidenta el 21 de mayo">Evalua tú también</a> </div>
      </div>
      <div id="fichaComentarios">
        <section class="clearfix">
          <p class="comentariosRanking"><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star estrellita"></i><i class="fa fa-star-half-o estrellita"></i></p>
          <p class="comentariosVisitas">213.300 Visitas</p>
          <p class="comentariosUser">Usuario: <span>Juan sin Tierra</span></p>
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
        <span style="text-transform:none;">x</span> categorías</h2>
      <div class="ficha"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_sanchez.jpg" alt="Alexis Sánchez">
        <section class="fichaBackground3">
          <p class="fichaNombre">Alexis Sánchez</p>
          <p class="fichaPregunta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>
        <p class="fichaVisitas">250.000 Visitas</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a> </div>
      <div class="ficha"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_burgos.jpg" alt="Ministro Jorge Burgos">
        <section class="fichaBackground1">
          <p class="fichaNombre">Ministro Jorge Burgos</p>
          <p class="fichaPregunta">¿Buen desempeño ante catástrofe en el norte?</p>
        </section>
        <p class="fichaVisitas">250.000 Visitas</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a> </div>
      <div class="ficha"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_bolocco.jpg" alt="Cecilia Bolocco">
        <section class="fichaBackground2">
          <p class="fichaNombre">Cecilia Bolocco</p>
          <p class="fichaPregunta">¿Estaba Enamorada de Menem?</p>
        </section>
        <p class="fichaVisitas">250.000 Visitas</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a> </div>
      <div class="ficha"> <img src="http://www.teohilfe.cl/clientes/tmido/imag/foto_davalos.jpg" alt="Sebastián Dávalos">
        <section class="fichaBackground1">
          <p class="fichaNombre">Sebastián Dávalos</p>
          <p class="fichaPregunta">¿Aprovechaba su condición de hijo para beneficio propio?</p>
        </section>
        <p class="fichaK"><i class="fa fa-thumbs-up tituloPulgar"></i> 100 k</p>
        <a href="ficha.php" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a> </div>
    </div>
    <br>
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
