
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link type="image/x-icon" href="/imag/favicon.ico" rel="shortcut icon" />
<link type="image/x-icon" href="h/imag/favicon.ico" rel="icon" />
<body>
<header>
	<div id="header">
  <a href="/">
    <img src="/imag/header_logo.png" width="359" height="55" alt="T-MIDO" class="head_logo"></a>
</div>
</header>
<!--contenedor-->
<div id="contenedor">
<hr noshade class="hr_home">

    <div id="contenido"  class="clearfix fondoHome">
    <p>Felicidades {{ $nombre }}</p>
    <p>Gracias por registrarte en T-mido.cl, para activar tu cuenta haz clic en el siguiente enlace,</p>
    <a href="/{{ $link }}" target="_blank"><h3>{{ $link }}</h3></a>
    <br>
    <p>Tus datos son los siguientes:</p>
    <p>Email: {{ $email }}</p>
    <p>Contraseña: {{ $pass }}</p>

    <a href="/publicaciones">Ir a t-mido.cl</a>
    </div>

</div>
<!--FOOTER-->
<br>
<footer>
<div id="footer">
  <p class="pieDerechos">Derechos Reservados 2001-2015<br>
    T-mido.com Derechos de Contenido Reservados </p>
  <div id="footerSocial"> <a href="http://www.vigaworks.com" target="_blank"><img src="/imag/footer_vigaworks.png" width="198" height="9" alt="Vigaworks" class="pieVigaworks"></a>
    <p class="pieSocial">Síguenos en Redes sociales</p>
    <a href="http://twitter.com" target="_blank"><img src="/imag/icono_twitter.png" alt="Twitter" class="pieImagMargin"></a> <a href="http://www.facebook.com" target="_blank" style="margin-right:75px;"><img src="/imag/icono_facebook.png" alt="Facebook" class="pieImagMargin"></a> <a href="mailto:info@t-mido.com" title="escríbenos!" class="pieLinkDireccion">info@t-mido.com</a> <a href="/politicas" title="Lee sobre nuestras políticas de privacidad" class="pieLinkDireccion">políticas de privacidad</a> </div>
  <!--END-->
</div>

</footer>
</body>
</html>
