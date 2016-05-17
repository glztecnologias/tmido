<head>
  <meta charset="utf-8">
  <title> @yield('titulo') | Administracion T-Mido</title>
  <script src="/js/jquery.datetimepicker.full.min.js"></script>
  <script src="/js/jquery-1.11.3.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
  <script>
$(document).ready(function() {
$('.datetimepicker').datetimepicker();
/**var seccion =;
$(".menu a").each(function (index)
{
   $(this).removeClass("active");
});

$('#'+seccion).addClass('active');
**/
});

function agrega_input_items(){
  $('.items_eval').empty();
  var numero_items = $('#cantidad_items option:selected').val();
  var i=0;
  while( i<numero_items ){

    $('.items_eval').append('<br><label>Contenido ITEM '+(i+1)+'</label><div class="field"><input name="item_'+(i+1)+'" type="text" ></div>');
    i++;
  }
}
  </script>

</head>
