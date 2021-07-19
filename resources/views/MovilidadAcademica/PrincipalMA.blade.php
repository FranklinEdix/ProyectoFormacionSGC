@extends('adminlte::page')

@section('title', 'MovlidadAcademica')

@section('content_header')
<div id="VolverPrincipal">
    <a href="{{ url('/dashboardFormacion?variable=1') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
      </svg> Principal</a>
</div>
<div class="d-flex">
<div class="w-100">
<section>
    @include('layouts.Targets')
</section>
@stop

@section('content')
    
        <div id="content">
            <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h1>Movilidad Academica</h1>
                    <p class="parraf_formacion">Este proceso se aplica a estudiantes del primer año de pregrado, que muestran dificultades academicas en las competencias genericas 
                        de comunicacion y razonamiento matematicoa a la escuela profesional y se inicia con la generacion del reporte de desempeño de ingresantes
                        y culmina con la evaluacion del plan de nivelacion.
                    </p>    
                </div>
            </div>
        </div>
    </div>
    <section>
        <nav >
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active  " id="nav-Resumen-tab" data-toggle="tab" href="#nav-Resumen" role="tab" aria-controls="nav-Resumen" aria-selected="true">Resumen</a>
              <a class="nav-link  " id="nav-Proceso-tab" data-toggle="tab" href="#nav-Proceso" role="tab" aria-controls="nav-Proceso" aria-selected="false">Diagrama de proceso</a>
              <a class="nav-link " id="nav-GrupInte-tab" data-toggle="tab" href="#nav-GrupInte" role="tab" aria-controls="nav-GrupInte" aria-selected="false">Grupos de Interes</a>
              <a class="nav-link  " id="nav-GuiaRap-tab" data-toggle="tab" href="#nav-GuiaRap" role="tab" aria-controls="nav-GuiaRap" aria-selected="false">Guia Rapida</a>
              <a class="nav-link " id="nav-Documentacion-tab" data-toggle="tab" href="#nav-Documentacion" role="tab" aria-controls="nav-Documentacion" aria-selected="false">Documencación</a>
              <a class="nav-link " id="nav-Indicadores-tab" data-toggle="tab" href="#nav-Indicadores" role="tab" aria-controls="nav-Indicadores" aria-selected="false">Indicadores</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-Resumen" role="tabpanel" aria-labelledby="nav-Resumen-tab">

                <section> <br>
                        <div class="container " id="graficos">
                        <h4 class="bg_tittle">&nbsp; Reporte General del proceso NIVELACIÓN</h4>
                    <div class="row">
                        <div class="col-lg-5" id="barras">
                        <h7 class="bg_tittle">Porcentaje de documentos subidos </h7><br>
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                        
                        <div class="col-lg-5" id="pastel">
                        <h7 class="bg_tittle">Estado de indicadores</h7><br>
                            <canvas id="myChart1" width="400" height="400"></canvas>
                        </div>                 
                    </div>

                    <div class="row">
                        <div class="col-lg-5" id="barras">
                        <h7 class="bg_tittle centrar_tit_canvas">Reporte de desempeño de ingresantes</h7><br>
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                        
                                    
                    </div>
                    <br>
                    <center><button class="btn btn-success" ><i class="fas fa-file-pdf"></i> Ver reporte General</button></center><br>

                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="nav-Proceso" role="tabpanel" aria-labelledby="nav-Proceso-tab">
                {{--Aquí tiene que ir el diagrama de flujo de Nivelación--}}
                <section> <br>
                    <div class="container " id="graficos">
                       <h4 class="bg_tittle">&nbsp; Diagrama de Flujo del proceso NIVELACIÓN</h4>
                        <center>
                        
                            <br>
                            <a type="button" href=""><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button></a>
                            <br>
                            <br>
                            <iframe allowfullscreen frameborder="0" style="width:960px; height:1020px" src="https://lucid.app/documents/embeddedchart/5fffa894-de91-4ac6-8a56-bfba10bc685c" id="A3_w~~.~oZPG"></iframe>
                            <br>
                        </center>
                     </div>
                </section>
            </div>
            <div class="tab-pane fade" id="nav-GrupInte" role="tabpanel" aria-labelledby="nav-GrupInte-tab">
            <section><br>
                <div class="container " id="graficos">
                
                    <h4 class="bg_tittle">&nbsp; Grupos de interes Proceso Nivelación</h4><br>
                    <h5 class="parraf_formacion">Las partes interesadas implicadas en el desarrollo del proceso NIVELACIÓN-INGRESANTES se detalla en el siguiente cuadro:</h5>
                    <br>
                
                <div  class="row" style="text-align:center">
                <center>
                    <div class="col-lg-8 " id="barras" >
                    <table class="table100 table-bordered colors" >
                            <thead  > 
                            
                                <tr class=" table100-head fond_color tamaño_head"  > <th  colspan="5"> <h4>PO02 Formación-Profesional </h4></th> </tr>
                                <tr class=" table100-head fond_color tamaño_head"  > <th  colspan="5"> <h4>PO02.01 Nivelación</h4></th> </tr>
                               
                              <tr class="table100-head tamaño_head">
                                <th scope="col">Parte interesada</th>
                                <th scope="col">Entradas</th>
                                <th scope="col">Procesos</th>
                                <th scope="col">Salidas</th>
                               
                              </tr>
                            </thead>
                            <tbody class="parraf_formacion cent"  >
                                <!-- FILA1-->
                                <tr>
                                    <td scope="col" style="vertical-align:middle;" >Dirección de escuela</td>
                                    <td scope="col" style="vertical-align:middle;" >Reporte de desempeño de ingresantes</td>
                                    <td scope="col" style="vertical-align:middle;" >Planificación-Programa-Nivelación</td>
                                    <td scope="col" style="vertical-align:middle;" >Plan de nivelación</td> 
                            
                                  
                                </tr>
                                 <!-- FILA2-->
                                
                                 <tr>
                                    <td scope="col" style="vertical-align:middle;" >Ingresante</td>
                                    <td scope="col" style="vertical-align:middle;" >Plan de nivelación</td>
                                    <td scope="col" style="vertical-align:middle;" >Desarrollo-Programa-Nivelación</td>
                                    <td scope="col" style="vertical-align:middle;" >Reporte de medición del perfil del ingresante</td>
                            
                                  
                                </tr>

                                <!-- FILA3-->
                                
                                <tr>
                                    <td rowspan="2" scope="col" style="vertical-align:middle;" >Dirección de escuela</td>
                                    <td rowspan="2" scope="col" style="vertical-align:middle;" >Reporte de Medición del perfil del ingresante</td>
                                    <td rowspan="2" scope="col" style="vertical-align:middle;" >Evaluación-Programa-Nivelación</td>
                                    <td  scope="col" style="vertical-align:middle;" >Informe de evaluación del plan de nivelación</td> 
                            
                                  
                                </tr>
                            
                                <!-- FILA4-->

                                <tr>
                                    
                                    <td scope="col" style="vertical-align:middle;" >Plan de mejora para la nivelación de ingresantes.</td>
                            
                                  
                                </tr>

                               

                                 <!-- FILA5-->
                              
                                <!-- FILA6-->
                                
                                
                            </tbody>
                        </table>
               
                    </div> 
                </center>
                         
                </div><BR>
                </div><BR>
          
            </section><BR>
            </div>
            <div class="tab-pane fade" id="nav-GuiaRap" role="tabpanel" aria-labelledby="nav-GuiaRap-tab">
                <center>
                    <br>
                    <iframe src="https://drive.google.com/file/d/1P0m9WQlFsVvjNKZxyfKDovIUw9F-xDRB/preview" width="960" height="520"></iframe>
                    <br>
                </center>
            </div>
            <div class="tab-pane fade" id="nav-Documentacion" role="tabpanel" aria-labelledby="nav-Documentacion-tab">
                
                             <section><br>
                                {{--Movilidad Academica--}}
                                <div class="container  " id="graficos">
                                <h4 class="bg_tittle">&nbsp; Control documentario</h4><br>
                                
                                {{--Convenio para Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Convenio para Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Permanente</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                
                                {{--Directiva para la Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Directiva para la Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Permanente</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                {{--Plan de Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Plan de Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Semestral</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                {{--Informe de Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Informe de Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Semestral</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                {{--Constancia de Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Constancia de Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Semestral</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                {{--Registros de Movilidad Académica--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                        <h3>Registros de Movilidad Académica</h3>
                                        </div>
                                         
                                    </div>
                                    </div>
                                     
                                    <table class="table" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Tiempo de Concervación</th>
                                            <th>Estado</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Una descripción</td>
                                            <td>Semestral</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                
                                </div>
                            </section>
            </div>

             <div class="tab-pane fade" id="nav-Indicadores" role="tabpanel" aria-labelledby="nav-Indicadores-tab">
                
                             <section><br>

                                <div class="container  " id="graficos">
                                <h4 class="bg_tittle">&nbsp; Indicadores de Gestion</h4><br>
                               
                                
                                        <select name="2021 - A" id="SelecPeriodo">
                                            <option>2021 - A</option>
                                            <option>2020 - B</option>
                                            <option>2020 - A</option>
                                        </select>
                                        <center>
                                            <div class="">
                                                <button class="btn btn-primary" id="4" onclick="MostrarVentanaMA(this.id)"> Ver Reporte General </button>
                                              </div>
                                            <div class="row">
                                                <div class="col-lg-6" id="tablaInd">
                                                    <h6>Indicadores</h6>
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Nro</th>
                                                                <th scope="col">Indicador</th>
                                                                <th scope="col">Estado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <link rel="stylesheet" href="/css/fondos_bordes.css">
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Tasa de estudiantes en Movilidad Académica por promoción de ingreso.</td>
                                                                <td> <button id="1" type="" class="btn btn-success btn-circle btn-sm" onclick="MostrarVentanaMA(this.id)">  </button> </td>
                                                            </tr>
                                                                                    
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Porcentaje de satisfacción de estudiantes en relación a la Movilidad Académica.</td>
                                                                <td> <button id="2" type="" class="btn btn-danger btn-circle btn-sm" onclick="MostrarVentanaMA(this.id)">  </button> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Porcentaje de satisfacción de docentes en relación a la Movilidad Académica.</td>
                                                                <td> <button id="3" type="" class="btn btn-warning btn-circle btn-sm" onclick="MostrarVentanaMA(this.id)">  </button> </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 {{--Mostrar Graficas--}}

                                                 <div class="col-lg-5"> 
                                                    <div id="reportPage">
                                                        <br>
                                                        <div class="card card-body">
                                                            <h6>Reporte General.</h6>
                                                            <canvas class="ventana4" id="myChartIndicadores" width="200" height="200"></canvas>
                                                            <br><br>
                                                        </div>
                                                    </div>   
                                                    <div id="v-pills-uno" style="display:none;">
                                                        <br><br>
                                                        <div class="card card-body">
                                                            <h6>Tasa de estudiantes en Movilidad Académica por promoción de ingreso.</h6>
                                                            <canvas class="ventana1" id="myChartIndicadoresDona1" width="200" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                    <div id="v-pills-dos" style="display:none;">
                                                      <br><br>
                                                      <div class="card card-body">
                                                          <h6>Porcentaje de satisfacción de estudiantes en relación a la Movilidad Académica.</h6>
                                                          <canvas class="ventana2" id="myChartIndicadoresDona2" width="200" height="200"></canvas>
                                                      </div>
                                                    </div>
                                                    <div id="v-pills-tres" style="display:none;">
                                                      <br><br>
                                                      <div class="card card-body">
                                                          <h6>Porcentaje de satisfacción de docentes en relación a la Movilidad Académica.</h6>
                                                          <canvas class="ventana3" id="myChartIndicadoresDona3" width="200" height="200"></canvas>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </center>
                                </div>
                            </section>
            </div>
            </div>
        </div>
     </div>



            </div>
          </div>
    {{--<div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Resumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Proceso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Grupos de interes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Guía rápida</a>
              </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Documentación</a>
                </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Indicadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="row">
            <div class="col-lg-5" id="barras">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="col-lg-5" id="pastel">
                <canvas id="myChart1" width="400" height="400"></canvas>
            </div>                 
        </div>
            <br>
            <button class="btn btn-success" ><i class="fas fa-file-pdf"></i> Ver reporte General</button>
        </div>
      </div>--}}
    </section>
</div>
@stop

@section('css')

    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/indicadores.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TargetsHover/MovAcademica.css') }}">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/IndicadoresPastel.js') }}"></script>
    <script src="{{ asset('js/IndicadoresPastel1.js') }}"></script>
    <script src="{{ asset('js/cambiarIndicador.js') }}"></script>
    <script src="{{ asset('js/donaMovilidadAcademica.js') }}"></script>
    {{--<script src="{{ asset('js/cambiarIndicador.js') }}"></script>--}}

@stop