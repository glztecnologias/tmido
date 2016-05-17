
  <meta property="og:url"           content="http://www.t-mido.cl/publicaciones/{{ $publicacion->id }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Medicion : {{ $publicacion->titulo }}" />
	<meta property="og:description"   content="{{ $publicacion->descripcion_corta }}" />
	<meta property="og:image"         content="http://www.t-mido.cl{{ $publicacion->url_foto }}" />

	<link rel="canonical" href="http://www.t-mido.cl/publicaciones/{{ $publicacion->id }}" />

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/redmond/jquery-ui.css"/>
<link href="/css/tmido.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-filestyle.css" rel="stylesheet" type="text/css">
<link href="/css/colorbox.css" rel="stylesheet" type="text/css">
<link href="/css/ranking.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/jeoquery.css" />
<link rel="stylesheet" type="text/css" href="/css/tooltipster.css" />
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/Selectyze.jquery.min.js"></script>
<script src="/js/jquery-filestyle.min.js"></script>
<script src="/js/jquery.colorbox-min.js"></script>
<script src="/js/jquery.slimscroll.min.js"></script>
<script src="/js/jquery.tooltipster.min.js"></script>

<script src="/js/highcharts.js"></script>
<script src="/js/exporting.js"></script>
<script src="/js/star_raty/jquery.raty.js"></script>

<script src="/js/jquery.timeago.js" type="text/javascript"></script>

<script type="text/javascript" src="/js/dscountdown.js"></script>
<link rel="stylesheet" href="/css/dscountdown.css" type="text/css" />

<script type="text/javascript" src="/js/jeoquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {

  $('.regresiva').dsCountDown({
    startDate: new Date("<?php echo date('F d, Y h:i:s'); ?>"), // this value is picked up by PHP script &lt;?php echo date('F d, Y h:i:s'); ?&gt;
    endDate: new Date("<?php $date = new DateTime($evaluacion->f_termino);echo date_format($date,'F d, Y h:i:s'); ?>"),
    titleDays: 'Dias', // Set the title of days
    titleHours: 'Horas', // Set the title of hours
    titleMinutes: 'Minutos', // Set the title of minutes
    titleSeconds: 'Segundos' // Set the title of seconds
    });
	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	/** file Input
	$('.comentarioFile').jfilestyle({
		inputSize: '191px',
		buttonText: 'Adjuntar Archivo'
	});  **/

	//tooltip
	$('.tooltip').tooltipster({
		position: 'right',
		contentAsHTML: true
	});

	//botones divs  audio video
  $('.number2').click(function(noLink) {
    noLink.preventDefault();
    //$('#video-container').addClass('hide');
    //$('#audio-container').removeClass();
    var cont='<iframe style="" src="http://docs.google.com/viewer?url=http://www.gorevalparaiso.gob.cl/archivos/archivoDocumento/GORE_ARI_Genero_2016.ppt&amp;embedded=true" width="474" height="298"></iframe>';
    $('#mediaContenedor').html(cont);

  });
	$('.number3').click(function(noLink) {
		noLink.preventDefault();
		//$('#video-container').addClass('hide');
		//$('#audio-container').removeClass();
    var audio= '<div id="audio-container"><audio controls preload="auto"><source src="http://www.teohilfe.cl/clientes/tmido/descargas/demo.ogg" type="audio/ogg">';
        audio+='<source src="http://www.teohilfe.cl/clientes/tmido/descargas/audio.mp3" type="audio/mpeg">';
        audio+='<p>Tú navegador no soporta el audio de HTML5, actualizalo por favor.</p></audio></div>';

    $('#mediaContenedor').html(audio);

	});
	$('.number4').click(function(noLink) {
		noLink.preventDefault();
		//$('#audio-container').addClass('hide');
		//$('#video-container').removeClass();
    $('#mediaContenedor').html('<iframe width="480" height="293" src="https://www.youtube.com/embed/P5_Msrdg3Hk" frameborder="0" allowfullscreen></iframe>');

	});

	// colorbox
	$('.verPDF').colorbox({
		width:928,
		height:556,
		scalePhotos: false
	});

	$('.fichaEvalua').colorbox({
		width:650,
		height:510,
		scalePhotos: false,
		onComplete: function() {
			$('#cboxLoadedContent').slimScroll({
					color: '#32A19B',
					height: '380px',
					distance: '0px'
				});
        $('.valoracion3').raty({
          number: 7,
          score: 1,
         starHalf   : 'star-half-big.png',
         starOff    : 'star-off-big.png',
         starOn     : 'star-on-big.png',
         path: '/imag/',
         hints: ['','','','','','',''],
          click: function(score, evt) {
          var id= $(this).attr('id')+"_r";
          $('#'+id).html(score);
            }

        });


      }
	});

	$('.verGraficos').colorbox({
		width:928,
		height:506,
		scalePhotos: false,
		onComplete: function() {
			$('#cboxLoadedContent').slimScroll({
					color: '#32A19B',
					size:'20px',
					height: '472px',
					distance: '0px'
				});
			}
	});


/**GRAFICO DONUT***/
$('#graf1_ficha').highcharts({
	exporting: { enabled: false },
            chart: {
								backgroundColor: "#F0F0F0",
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'

            },
            title: {
                text: 'me gusta / no me gusta',
								style:{'font-size':'15px','font-weight':'bold','color':'#D42D2C'},

            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
										marginTop: -50,
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Votacion',
                colorByPoint: true,
                data: [
								{
                    name: 'Me Gusta',
										color:'#099',
                    y: {{ $publicacion->megusta }}
                },
								{
                    name: 'No Me Gusta',
										color:'#D42D2C',
                    y: {{ $publicacion->nomegusta }},
                    sliced: true,
                    selected: true
                }]
            }]
        });
/*****************/
$('.valoracion').raty({
	number: 7,
  half: true,
	readOnly: true,
	score: {{$valoracion_pub}},
	cancel : true,
 target: '#n_valoracion',
 targetScore: '#n_valoracion',
 targetType : 'number',
 targetKeep   : true,
 path: '/imag/',
 hints: ['','','','','','','']

});


//***********************************





$('.boton_val_general').colorbox({
	width:400,
	height:100,
	scalePhotos: false,

	html:'<div>Mueve y Haz Click para valorar!</div><div><span class="valoracion2" ></span>&nbsp;&nbsp;&nbsp;&nbsp;<span id="n_valoracion2" class="n_val_estrella2"></span>&nbsp;&nbsp;<span><a class="boton_val_general" href="javascript:voto_valorar()">Enviar Valoracion!</a></span></div>',
	onComplete: function(){
		$('.valoracion2').raty({
			number: 7,
		  half: true,
			precision:0.5,
			score: 1,
			size       : 24,
		 target: '#n_valoracion2',
		 targetType : 'number',
		 starHalf   : 'star-half-big.png',
     starOff    : 'star-off-big.png',
     starOn     : 'star-on-big.png',
		 targetKeep   : true,
		 path: '/imag/',
		 hints: ['','','','','','','']

		});
	},
});

$("time.timeago").timeago();

var caracteresAMostrar = 200;
$(".comentario").each(function(){
//Para obtener al contenido de cada elemento basta con la palabra clave ‘this’
var contenido = $(this).html();

if (contenido.length > caracteresAMostrar) {
  var resumen = contenido.substr(0, caracteresAMostrar);
  var todo = contenido.substr(caracteresAMostrar, contenido.length - caracteresAMostrar);
var nuevocontenido = resumen + '<span class="complete">' + todo + '</span><span class="more">Leer mas...</span>';
$(this).html(nuevocontenido);
}



});

$(".more").toggle(function() {
    //$(this).text("Leer menos...").siblings(".complete").show();
    $(this).text("Leer menos");
    $(this).prev().css( "display", "block" );
    $(this).css( "display", "block" );
}, function() {
  //  $(this).text("Leer mas...").siblings(".complete").hide();
  $(this).text("Leer mas");
  $(this).prev().css( "display", "none" );
  $(this).css( "display", "block" );
});




});


//////////////////////TERMINO READY DOCUMENT/////////////////////////////////


function buscar()
{
  var categoria = $('select[name=categoria]').val();
  var palabra_clave =$('#search').val();
  window.location.href = "/publicaciones/busqueda/"+categoria+"/"+palabra_clave;
}

function voto_gusto(id,opcion)
{
	$.post( "/megusta", {idp:id,op:opcion}, function( data ) {
		alert(data);
	 	location.reload();
	});
}

function voto_valorar()
{
  var id = {{ $publicacion->id }};
	var nota = parseFloat($('.n_val_estrella2').html());
//alert(id+" "+nota);
	$.post( "/valorar", {idp:id,val:nota}, function( data ) {

		alert(data);
    location.reload();
	});
}

/**function evaluar_items()
{
  var idp = {{ $publicacion->id }};
  var ids_descriptores=new Array(); //array
  var puntajes = new Array(); //array
  var count=0;
	var count2;
  $( ".item_descriptor span" ).each(function()
   {
   if($(this).attr('class')=="valoracion3"){
       ids_descriptores.push($(this).attr('id'));
   }
   if($(this).attr('class')=="valor"){
     puntajes.push($(this).text());
   }
   count++;
 });


 /**for(count2=0;count2<ids_descriptores.length;count2++){
 alert(ids_descriptores[count2]+' :: '+puntajes[count2]);}**/

}
**/

unction evaluar_items()
{
  var idp = {{ $publicacion->id }};
  var ids_descriptores=new Array(); //array
  var puntajes = new Array(); //array
  var count=0;
	var count2;
  $( ".item_descriptor span" ).each(function()
   {
   if($(this).attr('class')=="valoracion3"){
       ids_descriptores.push($(this).attr('id'));
   }
   if($(this).attr('class')=="valor"){
     puntajes.push($(this).text());
   }
   count++;
 });
var descript = JSON.stringify(ids_descriptores);
var puntajes_desc = JSON.stringify(puntajes);
 $.post( "/evaluar_items", {publicacion:idp,descriptores:descript,puntajes:puntajes_desc}, function( data ) {

	 alert(data);
	 location.reload();
 });
 /**for(count2=0;count2<ids_descriptores.length;count2++){
 alert(ids_descriptores[count2]+' :: '+puntajes[count2]);}**/

}



function comentar()
{
  var id = {{ $publicacion->id }};
  var coment = $('#comentario').val();

  $.post( "/comentar", {idp:id,com:coment}, function( data ) {
    if(data=="OK")
    {
@if($datos_user)
      var come;
      come='<section>';
      come+='<p class="comentarioUsuarioResponde">{{ $datos_user->nombres}} {{ $datos_user->apellidos }}</p>';
  @if(isset($datos_user->url_foto))
  come+=' <img src="{{ $datos_user->url_foto }}" width="40" height="40"  class="comentarioUsuario">';

  @else
  come+=' <img src="/imag/user.png" width="40" height="40" class="comentarioUsuario">';

  @endif
      come+='  <div class="comentarioDeUsuario">Ahora<br>';
      come+= ''+coment+'';
      come+='  <a href="#" class="comentarioLeeMas">Ver más...</a></div>';
      come+='  <div class="comentarioAccion">';
      come+='    <p class="comentarioNegativo" title="recarga pagina para evaluar"><i class="fa fa-thumbs-down pulgarDown"></i>0</p>';
      come+='    <p class="ComentarioPositivo" title="recarga pagina para evaluar"><i class="fa fa-thumbs-up pulgarUp"></i>0</p>';
      come+='</section';
      $('.cont_comentarios').prepend(come);
@endif

    }
    else
    {
    	alert(data);
    }

  //  location.reload();
  });
}

function voto_gusto_comenta(id,opcion)
{
  $.post( "/megustacomentario", {idcom:id,op:opcion}, function( data ) {
		alert(data);
	 	location.reload();
	});
}


</script>
