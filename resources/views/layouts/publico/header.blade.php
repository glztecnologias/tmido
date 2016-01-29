<div id="header">
  <a href="/">
    <img src="/imag/header_logo.png" width="359" height="55" alt="T-MIDO" class="head_logo"></a>


@if($datos_user = session('usuario'))

<strong>{{ $datos_user->nombres }}</strong>
<a href="/ingreso/logout"> Salir</a>

@else

<form method="post" enctype="multipart/form-data" action="/ingreso/login">
  {!! csrf_field() !!}
  <label for="email">Email:</label> asdasdasdas asdjasd
  <input name="email" type="text" required id="email" value="{{ old('email') }}">
  <label for="clave">Contraseña:</label>
  <input id="clave" type="password" name="password" required>

  <input name="botonOpina" type="image" id="botonOpina" src="/imag/icono_opina.png" alt="Opina!" class="head_form_boton">
</form>
<a href="/registro" title="Regístrate y di lo que piensas" class="head_registrar">
  <i class="fa fa-chevron-right" style="font-size:8px;margin:0 4px 0 0">
  </i> Regístrate y di lo que piensas!</a>

@endif

</div>
