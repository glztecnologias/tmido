<link href="/css/tmido.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="/css/tooltipster.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/Selectyze.jquery.min.js"></script>
<script src="/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.selectyze').Selectyze({
		theme:'beta', effectOpen:'fade', effectClose:'fade'
	});

	//tooltip
	$('.tooltip').tooltipster({
		position: 'right',
		contentAsHTML: true
	});
});
function buscar(){
  var categoria = $('select[name=categoria]').val();
  var palabra_clave =$('#search').val();
  window.location.href = "/publicaciones/"+categoria+"/"+palabra_clave;
}
</script>
<style>
.fichaCategoria
{
	float:right;
	color:black;
	font-size:11px;
}

</style>
