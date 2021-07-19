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
                <div class="container div_container">
                    <h4 class="bg"> &nbsp;Normativa Vigentes</h4>
                    <div class="row">
                        <div class="col-lg-12" id="DocTablas">
                            <br>
                                <h4>Normas:</h4>
                                                            
                              <section>
                                  
                                <div class="container" id="Tabla">
                                    <div class="row">
                                        <div class="col-lg-10">
                                              <table class="table" id="tableNormasFormacion">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">N°</th>
                                                        <th scope="col">PUNTOS NORMA</th>
                                                        <th scope="col">DESCRIPCIÓN</th>
                                                        <th scope="col">ORIGEN</th>
                                                        <th scope="col">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="cuerpoTabla">
                                                    <!--
                                                        CARGA DINÁMICA DE LOS ELMENTOS DE LA TABLA
                                                    -->
                                                    @foreach ($normas as $norma)
                                                        <tr>
                                                            <td>{{$norma->id}}</td>
                                                            <td>{{$norma->puntosnorma}}</td>
                                                            <td>{{$norma->descripcion}}</td>
                                                            <td>{{$norma->origen}}</td>
                                                            <td>
                                                                <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>                                                                    
                                                                </button>                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </section>  
                        </div>                 
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
    <div class="modal fade" id="ViewPDF" tabindex="-1" role="dialog" aria-labelledby="vistaTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="vistaTitle">Vista del Archivo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
             {{--<!--<iframe src="{{$norma->rpdfNorma}}" width="740" height="600"></iframe>-->--}}
             <iframe id="iframePDF" width="740" height="600"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
    <link rel="stylesheet" href="{{ asset('css/NormativaCss.css') }}">

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/SelectHTMLNormasNormativa.js') }}"></script>
        {{--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>Vetado--}}
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#tableNormasFormacion').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,'All']]
        });
    } );
        function OpenModalPDF(objeto){
            var ruta = objeto.getAttribute("id");
            var iframe = document.getElementById("iframePDF");
            iframe.setAttribute("src", ruta);
            $('#ViewPDF').modal('show')
        }
    </script>

@stop
