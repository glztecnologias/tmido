<?php $seccion = 'directorio'; ?>
@extends('layouts/master')
@section('titulo','Directorio Busqueda')
@section('contenido')
<div id="contenido"  class="clearfix">
    <div id="inner">
     @if( $cat_id == 'todas')
        <h1><i class="fa fa-star tituloStar"></i>Todas las Categorias</h1>
     @else
         @forelse( $cat_id as $cat )
         <h1><i class="fa fa-star tituloStar"></i>{{ $cat->nombre }}</h1>
         @empty
           <h1>No existen publicaciones con la informacion solicitada...</h1>
         @endforelse
     @endif

        <p class="inn_p"><span>Mejores Comentarios</span> “¡Qué extraño! no hay plata para el próximo año pero si par ”salvar” a Codelco una empresa que no necesita ser salvada solo ..”</p>

    <div id="innerFicha">
@if(isset($publicaciones))


@forelse($publicaciones as $publicacion)
  <div class="ficha">
      <img src="{{ $publicacion->url_foto }}" alt="" style="height:141px">
       <section  style="background: {{ $publicacion->categoria->descripcion }} none repeat scroll 0% 0%;">
      <p class="fichaNombre">{{ $publicacion->titulo }}</p>
      <p class="fichaPregunta">{{ $publicacion->descripcion_corta }}</p>
   </section>
   <p class="fichaVisitas">{{ $publicacion->contador }} Visitas
  <span class="fichaCategoria">{{ $publicacion->categoria->nombre }}</span>
   </p>
      <a href="/publicaciones/{{ $publicacion->id }}" class="fichaOpina" title="¡Opina tú también!">¡Opina tú también!</a>
</div>
@empty
  <h1>Sin publicaciones</h1>
@endforelse

@else
<h1>No existen publicaciones con la informacion solicitada...</h1>
@endif

      <a href="http://www.emol.com" target="_blank"><img src="/imag/banner_horizontal.jpg" width="511" height="65" alt="Banner" class="bannerInterior"></a> </div>
    </div>
</div>
@endsection
