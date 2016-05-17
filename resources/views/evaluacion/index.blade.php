
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
<?php
$cont = 0;
if($descriptores){foreach($descriptores as $des){

?>
  <div class="item_descriptor">
   <span ><?php echo $des->descripcion; ?></span> ::
   <span  id="<?php echo $des->id; ?>" class="valoracion3"></span> ::
   <span id="<?php echo $des->id; ?>_r" class="valor" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <span id=""> PROMEDIO &nbsp;&nbsp;<strong><?php echo $promedios[$cont]; ?></strong> </span>
  </div>
  <br><br>

<?php $cont++;} }else{ ?>

<li>No existe!</li>

<?php } ?>





</div>

<br><br>
<span><a class="boton_val_general" href="javascript:evaluar_items();">Enviar Valoracion!</a></span>
