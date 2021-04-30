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
            <section>
            <div class="container text-center c-center">
                <div class="row" id="containerCards">
                <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen" style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Nivelación
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(40)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(40)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                        <a href="Nivelacion/Principal?variable=2" id="verMas" class="color" >Ver más <img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen " style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Enseñanza Aprendizaje
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                         <a href="dashboard/Nivelacion/Ense-Aprendizaje" id="verMas" class="color" >Ver más <img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen " style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Seguimiento Estudiante
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                        Ver más <a href="#" class="color" ><img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen " style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Movilidad Académica
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                        Ver más <a href="#" class="color" ><img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen " style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Actividades Extracurriculares
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                        Ver más <a href="#" class="color" ><img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2" id="tamaño-cards">
                    <div class="card mb-4 margen " style="max-width: 14rem;" id="trageta-1">
                    <div class="card-header text-center" id="targetas">Seguimiento Egresados
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
                                </div>
                                <div>
                            </div>                                    
                        </div>
                        <div class="ver_mas card-footer">
                        Ver más <a href="#" class="color" ><img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
                        </div>
                    </div>
                    </div>                
                </div>
                </div>
            </div>
            </section>
            <section>
                <div class="container div_container" id="graficos">
                
                    <h4 class="bg">&nbsp; Grupos de interes Macroproceso FORMACION</h4><br>
                    <h5 class="parraf_formacion">Las partes interesadas implicadas en el desarrollo del macroproceso Formación se detalla en los siguientes cuadros:</h5>
                    <br>
                
                <div  class="row" style="text-align:center">
                <center>
                    <div class="col-lg-8 " id="barras" >
                    <table class=" table-bordered colors" >
                            <thead  > 
                            
                                <tr class="fond_color" > <th  colspan="5"> <h4>PO02 FORMACIÓN </h4></th> </tr>
                               
                              <tr>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Entradas</th>
                                <th scope="col">Procesos</th>
                                <th scope="col">Salidas</th>
                                <th scope="col">Cliente</th>
                              </tr>
                            </thead>
                            <tbody class="parraf_formacion cent"  >
                                <!-- FILA1-->
                                <tr>
                                    <td rowspan="3" style="vertical-align:middle;">Oficina de Admision</td>
                                    <td rowspan="3" style="vertical-align:middle;">Reporte de desempeño de ingresantes</td>
                                    <td rowspan="3" style="vertical-align:middle;" >PO002.01:Nivelacion - Ingresantes</td>
                                    <td scope="col" style="vertical-align:middle;" >Plan de Nivelacion</td>
                                    <td scope="col" style="vertical-align:middle;" >Ingresante</td>
                                <tr>
                                    <td scope="col">Informe de evaluacion del plan de nivelacion de ingresantes</td>
                                    <td rowspan="2">Escuela de formacion profesional</td>
                                </tr>
                                <tr>
                                    <td scope="col">Plan de mejora para la nivelacion de ingresantes</td>
                                  
                                </tr>

                                <!-- FILA2-->
                                
                                <tr>
                                    <td rowspan="3" style="vertical-align:middle;" >Docente</td>
                                    <td rowspan="3" style="vertical-align:middle;" >Sumilla de la asignaturas</td>
                                    <td rowspan="3" style="vertical-align:middle;" >PO02.02: Enseñanza - Aprendizaje</td>
                                    <td scope="col" style="vertical-align:middle;" >Registros de evaluacion del aprendizaje</td>
                                    <td rowspan="3" style="vertical-align:middle;" >Escuela de formacion profesional</td>
                                </tr>
                                <tr>
                                    <td scope="col">Informe semestral de evaluacion E-A</td>  
                                </tr>
                                <tr>
                                    <td >Consolidado de notas por cada ciclo</td>
                                </tr>

                                <!-- FILA3-->

                                <tr>
                                    <td rowspan="2" style="vertical-align:middle;">Direccion de escuela</td>
                                    <td rowspan="2" style="vertical-align:middle;">Consolidado de notas por cada ciclo</td>
                                    <td rowspan="2" style="vertical-align:middle;">PO02.02:Enseñanza - Aprendizaje</td>
                                    <td scope="col" style="vertical-align:middle;">Registro de tutoria academica</td>
                                    <td rowspan="2" style="vertical-align:middle;">Esuela de formacion pofesional</td>
                                </tr>
                                <tr>
                                    <td scope="col">Registro de atencion psicopedagogica</td>
                                </tr>

                                <!-- FILA4-->
                                
                                <tr>
                                    <td scope="col" style="vertical-align:middle;">Estudiante</td>
                                    <td scope="col" style="vertical-align:middle;">Perfil de egreso</td>
                                    <td scope="col" style="vertical-align:middle;">PO02.04: Movilidad-Académicar</td>
                                    <td scope="col">Resultados de encuestas de satisfacción de estudiantes sobre la Movilidad Académicar</td>
                                    <td scope="col"></td>
                                </tr>

                                 <!-- FILA5-->
                                <tr>
                                    <td rowspan="2" style="vertical-align:middle;">Estudiante</td>
                                    <td rowspan="2" style="vertical-align:middle;">Actividades extracurriculares para fortalecer las competencias del estudiante</td>
                                    <td rowspan="2" style="vertical-align:middle;">PO02.05: Actividades-Extracurriculares</td>
                                    <td scope="col">Plan de actividades extracurriculares</td>
                                    <td ></td>
                                </tr>
                                <tr>
                                    <td scope="col">Informe de evaluación del Plan de actividades extracurriculares</td>
                                    <td ></td>
                                </tr>
                                <!-- FILA6-->
                                <tr>
                                <td   style="vertical-align:middle;">Unidad de Seguimiento del Egresado, Graduado e Inserción Laboral</td>
                                <td  style="vertical-align:middle;">Registro de egresados</td>
                                <td  style="vertical-align:middle;">PO02.06: Seguimiento-Egresados</td>
                                <td  style="vertical-align:middle;">Informe de inserción laboral de egresados</td>
                                <td  style="vertical-align:middle;"></td>

                                </tr>
                                
                            </tbody>
                        </table>
               
                    </div> 
                </center>
                         
                </div>
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
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
@stop
