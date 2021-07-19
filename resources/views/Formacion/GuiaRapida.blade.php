@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<div class="d-flex">
    <div class="w-100">
        <div id="content">
            <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h1>FORMACIÓN</h1>
                    <p class="parraf_formacion">Este proceso se aplica para Gestionar la nivelación de ingresantes, el desarrollo de la enseñanza-aprendizaje
                                                articulándolo con la investigación, desarrollo tecnológico, innovación y responsabilidad
                                                social, brindando seguimiento a estudiantes, fortaleciéndolo con el intercambio de
                                                experiencias nacionales e internacionales y actividades extracurriculares, con el
                                                propósito de lograr el perfil del egresado y el perfil profesional, en cumplimiento a los
                                                plazos y términos establecidos por los órganos competentes acorde a la normatividad
                                                vigente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

                {{--<div class="col-lg-1" id="IconFormacion">
                    <img src="img/capacitacion.png" alt="" width="130" height="130">
                </div>--}}
                </div>
            </div>
            </section>
                <!-- las targetas como opciones --->
                @include('layouts.Targets')
            <section>
                <div class="container div_container" id="graficos">
                    <h4 class="bg"> &nbsp;Guia del macroproceso formación</h4><br>
                    <h5>Docuementación de procesos: </h5><br>
                    {{--<p>
                        El proceso PO02.01: Nivelación-Integrantes, forma parte del Sistema de Gestión de Calidad de la 
                        Universidad Nacional Daniel Alcides Carrión, propietaria de los derechos de autor de este documento
                        y que no debe ser usado para otro proposito distinta al que se destina.     
                    </p>--}}
                    <div class="row">
                        <div class="col-lg-12" id="pdf-1">
                            <iframe src="https://drive.google.com/file/d/1jIVK5aCsjswmFfQv0Qj6MhadR96Vs6O6/preview" width="840" height="1050"></iframe>                        </div>                 
                    </div>
               
                    {{--
                    <div class="container" id="BotPdfReport">
                        <div class="" id="pdfReporteGeneral">
                            <button class="btn btn-success" ><i class="fas fa-file-pdf"></i> Ver reporte General</button>
                        </div>
                    </div>--}}

                </div>
            </section>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
@stop
