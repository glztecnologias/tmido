<div id="orangeCinta">
	<div id="orangeMensaje">
    <img src="/imag/ico_exclamacion.png" width="5" height="21" alt="!">
    <p class="orangeGanador">Ganador del Mes</p>
@forelse($usuarios_ranking as $ganador=> $nom)
		<p>{{$ganador+1}}.- {{$nom['nombres']}} {{$nom['apellidos']}}</p>
		@empty
		  <p>Proximamente!</p>
		@endforelse
		<a href="/ranking">ver ranking del mes y premios</a>
    </div>
</div>
