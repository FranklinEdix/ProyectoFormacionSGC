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
                                <h4 class="card-title"><?php echo(30)?>%</h4>
                                <div class="progress tamaño" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(30)?>%;"></div>
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
                         <a href="Nivelacion/Ense-Aprendizaje" id="verMas" class="color" >Ver más <img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
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
                <div class="container div_container " id="graficos">
                    <h4 class="bg"> &nbsp;Indicadores de Gestion</h4>
                    <select name="2021 - A" id="SelecPeriodo">
                        <option>2021 - A</option>
                        <option>2020 - B</option>
                        <option>2020 - A</option>
                    </select>
                    <center>
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
                                            <td>% de ingresantes que logran el perfil de ingreso</td>
                                            <td> <button type="" class="btn btn-success btn-circle btn-sm">verde</button> </td>
                                        </tr>
                                                                
                                        <tr>
                                            <td>2</td>
                                            <td>% de de estudiantes que logran el perfil de egreso</td>
                                            <td> <button type="" class="btn btn-success btn-circle btn-sm">verde</button> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tasa de estudiantes en riesgo academico</td>
                                            <td> <button type="" class="btn btn-success btn-circle btn-sm">verde</button> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tasa de Repitencia </td>
                                            <td> <button type="" class="btn btn-success btn-circle btn-sm">verde</button> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tasa de Desercion</td>
                                            <td> <button type="" class="btn btn-danger btn-circle btn-sm">rojo</button> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>% de satisfaccion de estudiantes con la movilidad academica</td>
                                            <td> <button type="" class="btn btn-warning btn-circle btn-sm">Amarillo</button> </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>% de satisfaccion de estudiantes con las actividades Extracurriculares</td>
                                            <td> <button type="" class="btn btn-warning btn-circle btn-sm"> Amarillo </button> </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>% de satisfaccion de empleadores sobre desempeño de egresados</td>
                                            <td> <button type="" class="btn btn-success btn-circle btn-sm">Verde</button> </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Tasa de insersion laboral</td>
                                            <td> <button type="" class="btn btn-danger btn-circle btn-sm">Rojo</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <div class="col-lg-5" id="graficoBarrasIndicadores">                
                            <h6>Reporte General Indicadores</h6>
                            <canvas class="graficoBarrasIndicadores" id="myChartIndicadores" width="400" height="400"></canvas>
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
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/IndicadoresPastel.js') }}"></script>
@stop
