@extends('adminlte::page')

@section('title', 'Nivelacion')

@section('content_header')
<div id="VolverPrincipal">
    <a href="{{ url('FormacionAdmision?variable=20') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
      </svg> Volver</a>
</div>
<div class="d-flex">
<div class="w-100">
<section>
    @include('layouts.TargetsAdmision')    
</section>
@stop

@section('content')
    
        <div id="content">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>NIVELACION</h1>
                            <p class="parraf_formacion">Este proceso se aplica a estudiantes del primer año de pregrado, que muestran dificultades academicas en las competencias genericas 
                                de comunicacion y razonamiento matematicoa a la escuela profesional y se inicia con la generacion del reporte de desempeño de ingresantes
                                y culmina con la evaluacion del plan de nivelacion.
                            </p>    
                        </div>
                    </div>
                </div>
            </section>

            <section>
                                  
              <div class="container div_container" id="graficos">
                
                    <h4 class="bg">&nbsp; Actividades</h4><br>
                    <h5 class="parraf_formacion">Evidencias</h5> 
                    <h6 class="parraf_formacion txt-estado" style="text-align:left" >0% incompleto</h6>

                    <center> <p class="parraf_formacion">* para añadir las evidencias ingrese a Subir Evidencia en la barra lateral  </p> </center>
                    <br>
                    <center>
                      <div class="row2" style="text-align:center">
                          <div class="col-sm-offset-1 col-sm-10">
                              <table id="table_id" class="table table-bordered table-striped table-hover">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Titulo</th>
                                          <th>Tiempo de conservación</th>
                                          <th>Estado</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="text-center">01</td>
                                          <td>Plan de estudios - Objetivos Educacionales</td>
                                          <td>Permanente</td>
                                          <td class="txt-estado">No subido</td>
                                      </tr>   
                                      <tr>
                                          <td class="text-center">02</td>
                                          <td>Registros de egresados</td>
                                          <td>Permanente</td>
                                          <td class="txt-estado">No subido</td>
                                      </tr>    
                                      <tr>
                                          <td class="text-center">03</td>
                                          <td>Programa de capacitación continua</td>
                                          <td>Anual</td>
                                          <td class="txt-estado">No subido</td>
                                      </tr>   
                                  </tbody>
                              </table>
                          </div>
                      </div>
                </center><br>


               
                </div>
          
            </section>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/indicadores.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TargetsHover/Nivelacion.css') }}">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/IndicadoresPastel.js') }}"></script>
    <script src="{{ asset('js/IndicadoresPastel1.js') }}"></script>
    <script src="{{ asset('js/cambiarIndicador.js') }}"></script>
    <script src="{{ asset('js/donaSeguimientoEstudiante.js') }}"></script>
    {{--<script src="{{ asset('js/cambiarIndicador.js') }}"></script>--}}

@stop