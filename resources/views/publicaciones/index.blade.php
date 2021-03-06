<?php $seccion = 'inicio'; ?>
@extends('layouts/master')
@section('titulo','inicio')
@section('contenido')
<hr noshade class="hr_home">
@include('layouts.publico.cinta_ganadores')
    <div id="contenido"  class="clearfix fondoHome">
@include('layouts.publico.banner_izq')
    <div id="homeLeft">
    <h1><i class="fa fa-star tituloStar"></i>Destacados</h1>
@forelse($publicaciones as $publicacion)
    @if ($publicacion->estado->nombre == "activo")
        <div class="ficha">
             <img src="{{ $publicacion->url_foto }}" alt="" style="height:141px">
             <section  style="background: {{ $publicacion->categoria->descripcion }} none repeat scroll 0% 0%;">
             <p class="fichaNombre">{{ $publicacion->titulo }}</p>
             <p class="fichaPregunta">{{ $publicacion->descripcion_corta }}</p>
          </section>
             <p class="fichaVisitas">{{ $publicacion->contador }} Visitas
    				<span class="fichaCategoria">{{ $publicacion->categoria->nombre }}</span>
            @if(isset($publicacion->competencia->nombre))
            <span class="fichaCategoria">{{ $publicacion->competencia->nombre }}</span>
            @endif
             </p>
             <a href="/publicaciones/{{ $publicacion->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
       </div>
    @endif
@empty
  <h1>Sin publicaciones</h1>
@endforelse
      </div>
    <div id="homeRight">
    <h1><i class="fa fa-thumbs-up tituloPulgar"></i>Opinión: Números y estadísticas</h1>
    <div id="homeRightGraph">
    <section>

      <div id="graf1" width="300">
      </div>


      </section>

    </div>

		<h1><i class="fa fa-thumbs-up tituloPulgar"></i>Más Valorados</h1>


		@forelse($mas_val as $num=> $publicacion_val)
     @if ($num==0)
		<div class="ficha">
	 	<img src="{{ $publicacion_val->url_foto}}" alt="" style="height:141px">
	 	<section  style="background: {{ $publicacion_val->categoria->descripcion }} none repeat scroll 0% 0%;">
	 	<p class="fichaNombre">{{$publicacion_val['titulo']}}</p>
	 	<p class="fichaPregunta">{{$publicacion_val['descripcion_corta']}}</p>
	 	</section>
	 	<p class="fichaK"><i class="fa fa-star estrellita"></i>{{$publicacion_val['valoracion']}}
			<span class="fichaCategoria">{{ $publicacion_val->categoria->nombre }}</span>
		</p>

	 	<a href="/publicaciones/{{ $publicacion_val->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a></div>
		 @endif
				@empty
				  <p>Sin Datos!</p>
				@endforelse

		@forelse($mas_megusta as $numx=> $publicacion_mg)
				 @if ($numx==0)
				 <div class="ficha">
					 <img src="{{ $publicacion_mg['url_foto'] }}" alt="{{$publicacion_mg['titulo']}}" style="height:141px">
			 	 	<section  style="background: {{ $publicacion_mg->categoria->descripcion }} none repeat scroll 0% 0%;">
				 <p class="fichaNombre">{{$publicacion_mg['titulo']}}</p>
				 <p class="fichaPregunta">{{$publicacion_mg['descripcion_corta']}}</p>
				 </section>
				 <p class="fichaK"><i class="fa fa-thumbs-up tituloPulgar"></i>{{$publicacion_mg['megusta']}}
					 <span class="fichaCategoria">{{ $publicacion_mg->categoria->nombre }}</span>
				 </p>
				 <a href="/publicaciones/{{ $publicacion_mg->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
				 </div>
				 @endif
						@empty
							<p>Sin Datos!</p>
						@endforelse
						@forelse($mas_val as $num=> $publicacion_val)
				     @if ($num==1)
						<div class="ficha">
					 	<img src="{{ $publicacion_val['url_foto'] }}" alt="{{$publicacion_val['titulo']}}" style="height:141px">
					 	<section  style="background: {{ $publicacion_val->categoria->descripcion }} none repeat scroll 0% 0%;">
					 	<p class="fichaNombre">{{$publicacion_val['titulo']}}</p>
					 	<p class="fichaPregunta">{{$publicacion_val['descripcion_corta']}}</p>
					 	</section>
					 	<p class="fichaK"><i class="fa fa-star estrellita"></i>{{$publicacion_val['valoracion']}}
							<span class="fichaCategoria">{{ $publicacion_val->categoria->nombre }}</span>
						</p>

					 	<a href="/publicaciones/{{ $publicacion_val->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a></div>
						 @endif
								@empty
								  <p>Sin Datos!</p>
								@endforelse

						@forelse($mas_megusta as $numx=> $publicacion_mg)
								 @if ($numx==1)
								 <div class="ficha">
									 <img src="{{ $publicacion_mg['url_foto'] }}" alt="{{$publicacion_mg['titulo']}}" style="height:141px">
							 	 	<section  style="background: {{ $publicacion_mg->categoria->descripcion }} none repeat scroll 0% 0%;">
								 <p class="fichaNombre">{{$publicacion_mg['titulo']}}</p>
								 <p class="fichaPregunta">{{$publicacion_mg['descripcion_corta']}}</p>
								 </section>
								 <p class="fichaK"><i class="fa fa-thumbs-up tituloPulgar"></i>{{$publicacion_mg['megusta']}}
									 <span class="fichaCategoria">{{ $publicacion_mg->categoria->nombre }}</span>
								 </p>
								 <a href="/publicaciones/{{ $publicacion_mg->id }}" class="fichaOpina tooltip" title="¡Opina tú también!">¡Opina tú también!</a>
								 </div>
								 @endif
										@empty
											<p>Sin Datos!</p>
										@endforelse
    </div>
    </div>

@endsection
