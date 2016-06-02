
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/redmond/jquery-ui.css"/>
<link rel="stylesheet" href="/css/jeoquery.css" />
<link href="/css/tmido.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-filestyle.css" rel="stylesheet" type="text/css">
<link href="/css/colorbox.css" rel="stylesheet" type="text/css">
<link href="/css/ranking.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/tooltipster.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/Selectyze.jquery.min.js"></script>
<script src="/js/jquery-filestyle.min.js"></script>
<script src="/js/jquery.colorbox-min.js"></script>
<script src="/js/jquery.slimscroll.min.js"></script>
<script src="/js/jcarousellite_1.0.1.min.js"></script>
<script src="/js/jquery.tooltipster.min.js"></script>
<script src="/js/highcharts.js"></script>
<script src="/js/exporting.js"></script>
<script src="/js/star_raty/jquery.raty.js"></script>
	<script type="text/javascript" src="/js/dscountdown.js"></script>
<link rel="stylesheet" href="/css/dscountdown.css" type="text/css" />

<script type="text/javascript" src="/js/jeoquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	$('.regresiva').dsCountDown({
		endDate: new Date("December 24, 2020 23:59:00")
		});

	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	// file Input
	/**$('.comentarioFile').jfilestyle({
		inputSize: '191px',
		buttonText: 'Adjuntar Archivo'
	});**/

	//carrusel
	$('#carrusel').jCarouselLite({
        btnNext: '.carruselNext',
        btnPrev: '.carruselPrev',
		visible: 8,
		speed: 800,
		easing: 'easeInOutBack'
    });

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
		width:518,
		height:410,
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



	//***********************************/
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


});

function voto_gusto(id,opcion)
{
	$.post( "/megusta", {idp:id,op:opcion}, function( data ) {
	 	alert(data);
	 	location.reload();
	});
}

function buscar()
{
  var categoria = $('select[name=categoria]').val();
  var palabra_clave =$('#search').val();
  window.location.href = "/publicaciones/busqueda/"+categoria+"/"+palabra_clave;
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

function evaluar_items()
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
@if($publicacion->act_comentarios == 1)
@if($datos_user)
      var come;
      come='<section>';
      come+='<p class="comentarioUsuarioResponde">{{ $datos_user->nombres}} {{ $datos_user->apellidos }}</p>';
  @if($datos_user->url_foto)
      come+=' <img src="{{ $datos_user->url_foto }}" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">';
  @else
     come+=' <img src="/imag/user.png" width="40" height="40" alt="NOMBRE_USUARIO_DINAMICO" class="comentarioUsuario">';

  @endif
      come+='  <div class="comentarioDeUsuario"> Hace 2 horas<br>';
      come+= ''+coment+'';
      come+='  <a href="#" class="comentarioLeeMas">Ver más...</a></div>';
      come+='  <div class="comentarioAccion">';
      come+='    <p class="comentarioNegativo" title="recarga pagina para evaluar"><i class="fa fa-thumbs-down pulgarDown"></i>0</p>';
      come+='    <p class="ComentarioPositivo" title="recarga pagina para evaluar"><i class="fa fa-thumbs-up pulgarUp"></i>0</p>';
      come+='</section';
      $('.cont_comentarios').prepend(come);
@endif
@endif
    }
    else
    {
    	alert(data);
    }

  //  location.reload();
  });
}


</script>
