<div id="header">
  <a href="/">
    <img src="/imag/header_logo.png" width="359" height="55" alt="T-MIDO" class="head_logo"></a>


@if($datos_user = session('usuario'))
&nbsp;&nbsp;
  <div id="txt_bienvenida">
  Bienvenido {{ $datos_user->nombres}} {{ $datos_user->apellidos}}
  <br>
  <a href="/cuenta" id="txt_cuenta" title="Ir a cuenta">Mi Cuenta <i class="fa fa-user"></i></a>
| <a href="/ingreso/logout" id="txt_logout" title="Cerrar Sesion">  Salir <i class="fa fa-sign-out"></i></a>

</div>
<span>
  @if($datos_user->url_foto == "" || $datos_user->url_foto == null)
    <img src="/imag/user.png"  class="comentarioUsuario" width="40" height="40" style="float: right;">

  @else
<img src="{{ $datos_user->url_foto }}"  class="comentarioUsuario" width="40" height="40" style="float: right;">
  @endif

</span>

@else

<form method="post" enctype="multipart/form-data" action="/ingreso/login">
  {!! csrf_field() !!}
  <label for="email">Email:</label>
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
