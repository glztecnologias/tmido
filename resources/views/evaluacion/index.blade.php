
<h1>{{ $evaluacion->nombre }}</h1>
<br>
<img width="40" src="{{ $publicacion->url_foto }}">&nbsp;&nbsp;<strong>{{ $publicacion->titulo }}</strong>
<br>
<br>
<h3>Instrucciones:</h3>
<p>{{ $evaluacion->instrucciones }}</p>
<br>
<h2>Items de evaluacion:</h2>
<br>
<div id="descriptores">
@forelse($descriptores as $des)
    <div class="item_descriptor">
     <span >{{ $des->descripcion }}</span> ::
     <span  id="{{ $des->id }}" class="valoracion3"></span> ::
     <span id="{{ $des->id }}_r" class="valor" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <span id=""> X : 6.5 </span>
   </div>
<br><br>
@empty
    <li>No existe!</li>

@endforelse
</div>

<br><br>
<span><a class="boton_val_general" href="javascript:evaluar_items();">Enviar Valoracion!</a></span>
