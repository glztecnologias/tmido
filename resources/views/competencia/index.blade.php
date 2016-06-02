<?php $seccion = 'competencias'; ?>
@extends('layouts/master')
@section('titulo','inicio')
@section('contenido')
<hr noshade class="hr_home">
    <div id="contenido"  class="clearfix fondoHome">
      <h1>Competencias</h1>
      <br>
      <br>
         <div class="ficha_competencia">

<h3>Titulo Competencia</h3>          <hr>

              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
              <div class="ficha_competidor_">
                <span class="foto_competidor"></span>
                <span class="pje_competidor"></span>
                <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
              </div>
        </div>
        <div id="homeRight">
          <section >
            <div id="graf1_ficha" style="max-width:250px;margin-left:35px; height:250px;">

            </div>
          </section>
          <section>
            <div id="graf2_ficha" style="max-width:310px;">

            </div>
          </section>

        <script>

                $('#graf1_ficha').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Votacion en %'
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
                        name: 'Competidores',
                        colorByPoint: true,
                        data: [{
                            name: 'Uno',
                            y: 56.33
                        }, {
                            name: 'Dos',
                            y: 24.03,
                            sliced: true,
                            selected: true
                        }, {
                            name: 'tres',
                            y: 10.38
                        }, {
                            name: 'Cuatro',
                            y: 4.77
                        }, {
                            name: 'Cinco',
                            y: 0.91
                        }, {
                            name: 'Seis',
                            y: 0.2
                        }]
                    }]
                });

        </script>
        </div>
        <div class="ficha_competencia">

         <h3>Titulo Competencia</h3>
         <hr>

             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
             <div class="ficha_competidor_">
               <span class="foto_competidor"></span>
               <span class="pje_competidor"></span>
               <a href="" class="boton_accion_competidor"><span>Evalua o Vota</span></a>
             </div>
       </div>


  </div>
@endsection
