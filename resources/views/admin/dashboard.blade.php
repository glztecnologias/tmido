<!DOCTYPE html>
<html>
	@include('layouts.admin.head')
  <body>
    <div class="ui container">
      <br>
  @include('layouts.admin.header')
      <div class="ui divider"></div>
      <br>
  @include('layouts.admin.menu')

<div class="twelve wide column"> <!--Contenido-->

<!--aca el contenido que cambia-->
  @yield('contenido_admin')
<!--*********************************************************-->

</div>  
    </div>
    </div>
  </body>
</html>
