<?php $seccion = 'cuenta'; ?>
@extends('layouts/master')
@section('titulo','cuenta_usuario')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
      <h1>Datos Usuario</h1>
      <a href="/ingreso/logout"> Cerrar Sesion</a><br>
<form class="">
  {!! csrf_field() !!}
<div class="datos_usuario">
      @if($datos_user = session('usuario'))
      <label class="label_datos">Usuario E-Mail : {{ $datos_user->email }}</label><br>
      <label class="label_datos">Fotografia</label>
      <input class="input_datos"  name="url_foto" type="text" value="{{ $datos_user->url_foto }}"/><br>
      <label class="label_datos">Nombres</label>
      <input class="input_datos" name="nombres" type="text" value="{{ $datos_user->nombres }}"/><br>
      <label class="label_datos">Apellidos</label>
      <input class="input_datos" name="apellidos" type="text" value="{{ $datos_user->apellidos }}"/><br>
      <label class="label_datos">rut</label>
      <input class="input_datos"  name="rut" type="text" value="{{ $datos_user->rut }}"/><br>

      <label class="label_datos">Password</label>
      <input class="input_datos" type="text" value="{{ $datos_user->password }}"/><br>

    <!--  <label class="label_datos" name="comuna" >comuna</label>
      <input class="input_datos" type="text" value="{{ $datos_user->comuna }}"/><br>
      <label class="label_datos">ciudad</label>
      <input class="input_datos" name="ciudad" type="text" value="{{ $datos_user->ciudad }}"/><br>
      <label class="label_datos">pais</label>
      <input class="input_datos" name="pais" type="text" value="{{ $datos_user->pais }}"/><br>

      Region&raquo; <select onchange="set_country(this,country,city_state)" size="1" name="region">
      <option value="" selected="selected">SELECT REGION</option>
      <option value=""></option>
      <script type="text/javascript">
      setRegions(this);
      </script>
      </select>
      Country
      <select name="country" size="1" disabled="disabled" onchange="set_city_state(this,city_state)">
      </select>
      City/State<select name="city_state" size="1" disabled="disabled" onchange="print_city_state(country,this)">
      </select>
<input class="input-large input_datos" id="city" type="text"/>


      <label class="label_datos">Pais</label>
      <select id="country" class="country_input" disabled="disabled"></select><br>

      <label class="label_datos">Region</label>
      <select id="region" class="country_input" disabled="disabled"></select><br>

      <label class="label_datos">Ciudad</label>
      <select id="" class="country_input" disabled="disabled"></select><br>
  -->
      <label class="label_datos">Fecha de Nacimiento</label>
      <input class="input_datos" name="f_nac" type="text" value="{{ $datos_user->f_nac }}"/><br>
      <label class="label_datos">sexo</label>
      <input class="input_datos" name="sexo" type="text" value="{{ $datos_user->sexo }}"/><br>
      <label class="label_datos">facebook url</label>
      <input class="input_datos" type="text" name="facebook" value="{{ $datos_user->facebook }}"/><br>
      <label class="label_datos">google+ url</label>
      <input class="input_datos" type="text"  name="google" value="{{ $datos_user->google }}"/><br>
      <input class="botonComentario" type="submit" value="Actualizar Datos!" style="width:120px;margin-right: 0px;"/><br>
      @endif
</div>
</form>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/188.0.0/prettify.js"></script>
<script src="/js/bootstrap.min.js"></script>
 <script src="/js/jeoquery.js"></script>
<script>
            $(function () {
                jeoquery.defaultData.userName = 'tompi';

                $("#country").jeoCountrySelect({
                    callback: function () {
                        $("#country").removeAttr('disabled');
                    }
                });
                $("#postalCode").jeoPostalCodeLookup({
                    countryInput: $("#country"),
                    target: $("#postalPlace")
                });

                $("#city").jeoCityAutoComplete({callback: function(city) { if (console) console.log(city);}});
                prettyPrint();
            });
        </script>
@endsection
