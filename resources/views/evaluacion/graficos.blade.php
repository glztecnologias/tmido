<h1>Graficos & Puntajes <h3>"{{ $evaluacion->nombre }}"</h3></h1>
<br>
<img width="40" src="{{ $publicacion->url_foto }}">&nbsp;&nbsp;<strong>{{ $publicacion->titulo }}</strong>
<br>
<br>

<h2>Items de evaluacion:</h2>
<br>
<div class="cont_des_graf">
<?php
$cont = 0;
if($descriptores){foreach($descriptores as $des){

?>
  <div class="item_descriptor_ev">
    <span class="promedio_graf"><?php echo $promedios[$cont]; ?></span><br>
   &nbsp;&nbsp;<span class="descriptor_graf"><?php echo $des->descripcion; ?></span><br>
   <span id="star_graf_<?php echo $des->id; ?>"></span>
  <!--  <script>
    $('#star_graf_<?php echo $des->id; ?>').raty('score',<?php echo $promedios[$cont]; ?>);
  </script>-->

  </div>


<?php $cont++;} }else{ ?>

<span>No existen!</span>

<?php } ?>

</div>
