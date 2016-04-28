<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> @yield('titulo') | T-Mido</title>
<link type="image/x-icon" href="/imag/favicon.ico" rel="shortcut icon" />
<link type="image/x-icon" href="h/imag/favicon.ico" rel="icon" />
<link rel="apple-touch-icon" href="/imag/ico57.png" sizes="57x57">
<link rel="apple-touch-icon" href="/imag/ico72.png" sizes="72x72">
<link rel="apple-touch-icon" href="/imag/ico76.png" sizes="76x76">
<link rel="apple-touch-icon" href="/imag/ico114.png" sizes="114x114">
<link rel="apple-touch-icon" href="/imag/ico120.png" sizes="120x120">
<link rel="apple-touch-icon" href="/imag/ico144.png" sizes="144x144">
<link rel="apple-touch-icon" href="/imag/ico152.png" sizes="152x152">

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
@if ( $seccion == 'ficha' )

	@if($publicacion->competencia_id == null)
		@include('layouts.publico.head_ficha')
	@else
		@include('layouts.publico.head_ficha_competencia')
  @endif

@elseif ( $seccion == 'inicio')
	@include('layouts.publico.head')
@else
	@include('layouts.publico.head')
@endif
<!--SWish si es Ficha,Ficha Multiple, Inicio/Home, Categorias-->

<!--*********************************************************-->

</head>
<body>
@include('layouts.publico.top_menu')
<header>
	@include('layouts.publico.header')
</header>
@include('layouts.publico.cinta_busqueda')
<!--contenedor-->
<div id="contenedor">
@yield('contenido')
</div>
@include('layouts.publico.footer')
</body>
</html>
