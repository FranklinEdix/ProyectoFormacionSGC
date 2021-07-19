@extends('adminlte::page')

@section('title', 'RegistrosAcademicos')

@section('content_header')
<div class="d-flex">
    <div class="w-100">
        <div id="content">
            <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12" id="fon">
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
         
                {{-- las targetas como opciones --}}
                @include('layouts.TargetsRegistrosAcademicos')


                <div class="container div_container" id="graficos">
                
                    <h4 class="bg">&nbsp; Actividades</h4><br>
                    <h5 class="parraf_formacion">Evidencias</h5> 
                    <h5 class="parraf_formacion" style:align=left>0% incompleto</h5>

                    <center> <p class="parraf_formacion">* para añadir las evidencias ingrese a Subir Evidencia en la barra lateral  </p> </center><br>
                   
                    <div class="row2" >
                        <h5 class="parraf_formacion">Actualizacion por Semestre</h5>

                       
                        <select name="2021 - A" id="SelecPeriodo">
                            <option>2021 - A</option>
                            <option>2020 - B</option>
                            <option>2020 - A</option>
                        </select>
                      

                        <div class="col-sm-offset-1 col-sm-10">
                            
                            <center>
                            <table id="table_id" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Titulo</th>
                                        <th>Tiempo de conservación</th>
                                        <th class="text-center">Semestre</th>
                                        <th>Estado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">01</td>
                                        <td>Informe periodico de la Formacion</td>
                                        <td>Semestral</td>
                                        <td class="text-center">2021-A</td>
                                        <td class="txt-estado">No subido</td>
                                    
                                    </tr>   
                                </tbody>
                            
                            </table>
                            </center>
                        </div>
                    </div><br>

                    <div class="row2" >
                        <h5 class="parraf_formacion" style:align=left>Actualización por Año</h5>
                        <div class="col-sm-offset-1 col-sm-10">
                           
                            <center>
                            <table id="table_id" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Titulo</th>
                                        <th>Tiempo de conservación</th>
                                        <th class="text-center">Año</th>
                                        <th>Estado</th>
                                        
                                    </tr>
                                </thead>
                                
                                    <tr>
                                        <td class="text-center">02</td>
                                        <td>Informe de gestion de la formacion</td>
                                        <td class="text-center">Anual</td>
                                        <td class="text-center">2021</td>
                                        <td class="txt-estado">No subido</td>
                                    
                                    </tr>
                                
                                   
                                </tbody>
                            
                            </table>
                            </center>
                        </div>
                    </div>
                  
                </div>
      

                
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/indicadores.css">
<link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/graficoDeBarras.js"></script>
    <script src="js/graficoPastel.js"></script>
@stop

