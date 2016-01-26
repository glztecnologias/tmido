<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<link href="/css/tmido.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-filestyle.css" rel="stylesheet" type="text/css">
<link href="/css/colorbox.css" rel="stylesheet" type="text/css">
<link href="/css/ranking.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://www.teohilfe.cl/clientes/tmido/css/tooltipster.css" />
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/Selectyze.jquery.min.js"></script>
<script src="/js/jquery-filestyle.min.js"></script>
<script src="/js/jquery.colorbox-min.js"></script>
<script src="/js/jquery.slimscroll.min.js"></script>
<script src="/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	// file Input
	$('.comentarioFile').jfilestyle({
		inputSize: '191px',
		buttonText: 'Adjuntar Archivo'
	});

	//tooltip
	$('.tooltip').tooltipster({
		position: 'right',
		contentAsHTML: true
	});

	//botones divs  audio video
	$('.number3').click(function(noLink) {
		noLink.preventDefault();
		$('#video-container').addClass('hide');
		$('#audio-container').removeClass();
	});
	$('.number4').click(function(noLink) {
		noLink.preventDefault();
		$('#audio-container').addClass('hide');
		$('#video-container').removeClass();
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

});

function buscar(){
  var categoria = $('select[name=categoria]').val();
  var palabra_clave =$('#search').val();
  window.location.href = "/publicaciones/busqueda/"+categoria+"/"+palabra_clave;
}
</script>
