
<link href="/css/tmido.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="/css/Selectyze.jquery.css" rel="stylesheet" type="text/css">
<link href="/css/tooltipster.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/Selectyze.jquery.min.js"></script>
<script src="/js/jquery.tooltipster.min.js"></script>
<script src="/js/highcharts.js"></script>
<script src="/js/exporting.js"></script>

<script src="/js/star_raty/jquery.raty.js"></script>
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


	// Build the chart
	$('#graf1').highcharts({
			chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
			},
			title: {
					text: 'Browser market shares January, 2015 to May, 2015'
			},
			tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
					pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
									enabled: false
							},
							showInLegend: true
					}
			},
			series: [{
					name: 'Brands',
					colorByPoint: true,
					data: [ {
							name: 'Chrome',
							y: 24.03,
							sliced: true,
							selected: true
					}, {
							name: 'Firefox',
							y: 10.38
					}]
			}]
	});



});
function buscar(){
  var categoria = $('select[name=categoria]').val();
  var palabra_clave =$('#search').val();
  window.location.href = "/publicaciones/busqueda/"+categoria+"/"+palabra_clave;
}

</script>
<style>
.fichaCategoria
{
	float:right;
	color:black;
	font-size:11px;}
</style>
