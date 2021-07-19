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
                             
                                     <h4 class="bg">&nbsp; Evidencias</h4><br>
                             
                                         
                                     
                                       <center>
                                       <h5 class="parraf_formacion">Lista de evidencias</h5> 

                                         <p class="parraf_formacion">Desde esta ventana usted puede subir las evidencias encomendadas a su persona. </p>
                                         <div class="row2" style="text-align:center">

                                         
                                             <div class="col-sm-offset-1 col-sm-10">
                                                 <table id="table_id" class="table table-bordered table-striped table-hover">
                                                     <thead>
                                                         <tr>
                                                             <th>No.</th>
                                                             <th>Titulo</th>
                                                             <th>Tiempo de conservación</th>
                                                             <th>Estado</th>
                                                             <th>Opciones</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td class="text-center">01</td>
                                                             <td>Manual del proceso Formación</td>
                                                             <td>Permanente</td>
                                                             <td class="txt-estado">
                                                             <div  title="Subir Plan Anual de Trabajo para la Formación">
                                                               <a href="" name="archivosubido" >
                                                                 <svg id="icon_cambiar_color" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                                     <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                                                     <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                                                 </svg>     
                                                               </a>
                                                             </div>
                                                             </td>
                                                             <td class="text-center"></td>
                                                         </tr>
         
                                                        
         
                                                        
                                                     </tbody>
                                                 
                                                 </table>
                                             </div>
                                         </div>
                                         </center>
         
                                  
                      
                         </div>
                   
                     </section>
        </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/indicadores.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="{{ asset('js/IndicadoresPastel.js') }}"></script>
    <script src="{{ asset('js/IndicadoresPastel1.js') }}"></script>
    <script src="{{ asset('js/cambiarIndicador.js') }}"></script>
    <script src="{{ asset('js/donaIndicadores.js') }}"></script>
    <script src="{{ asset('js/CambiarColor.js') }}"></script>

    
    
@stop
