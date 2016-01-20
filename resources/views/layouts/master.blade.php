<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>T-Mido - @yield('titulo')</title>
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
@include('layouts.publico.head')
</head>
<body>
@include('layouts.publico.top_menu')

<header>
	@include('layouts.publico.header')
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
@yield('contenido')
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
