<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
  window.location.href = "/publicaciones/busqueda/"+categoria+"/"+palabra_clave;
}

google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
					width:350,
					height:300
        };

        var chart = new google.visualization.PieChart(document.getElementById('graf1'));

        chart.draw(data, options);
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
