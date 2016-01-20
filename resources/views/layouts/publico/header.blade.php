<div id="header">
  <a href="index.php">
    <img src="http://www.teohilfe.cl/clientes/tmido/imag/header_logo.png" width="359" height="55" alt="T-MIDO" class="head_logo"></a>
@if(!isset($usuario))
  <form method="post" enctype="multipart/form-data" action="/auth/login">
    {!! csrf_field() !!}
    <label for="email">Email:</label>
    <input name="email" type="text" required id="email" value="{{ old('email') }}">
    <label for="clave">Contraseña:</label>
    <input id="clave" type="password" name="password" required>

    <input name="botonOpina" type="image" id="botonOpina" src="http://www.teohilfe.cl/clientes/tmido/imag/icono_opina.png" alt="Opina!" class="head_form_boton">
  </form>
  <a href="/registro" title="Regístrate y di lo que piensas" class="head_registrar">
    <i class="fa fa-chevron-right" style="font-size:8px;margin:0 4px 0 0">
    </i> Regístrate y di lo que piensas!</a>
@else
 <strong>Tengo que inventar algo</strong>

@endif

</div>
