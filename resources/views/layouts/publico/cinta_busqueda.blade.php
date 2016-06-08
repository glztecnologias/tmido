
<div id="cinta" class="cintaHome">
  <div id="cintaBuscador">

    <form>
      <input name="search" type="text" id="search" class="cinInput" required>
      <select name="categoria" size="1" id="categoria" class="selectyze">
        <option value="todas">Todas las categorias</option>
@foreach($categorias as $categoria)
				<option value="{{ $categoria->nombre_url }}">{{ $categoria->nombre }}</option>
@endforeach
      </select>
      <a  href="javascript:buscar();" type="image" name="botonBuscar" id="botonBuscar" src="" class="cinButton">
        <img src="/imag/boton_buscar.png" alt="" />
      </a>
    </form>

    <div class="marquee up">
@foreach($avisos as $aviso)
      <p><a href="{{ $aviso->url }}">{{ $aviso->contenido }}</a></p>
@endforeach
<!--      <p><a href="">Atencion! Nueva competencia de canto...¡Participa!***********************hola</a></p>
      <p><a href="">Bachelet baja 30% de aprobacion...jahsda skjsd askdjhasd kasdjaskjahdkjasd as</a></p>-->
    </div>

  </div>
</div>
