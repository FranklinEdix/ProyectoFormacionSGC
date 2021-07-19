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
                <div class="container div_container " id="graficos">
                    <h4 class="bg"> &nbsp;Indicadores de Gestion</h4>
                    {{--
                    <select name="2021 - A" id="SelecPeriodo">
                        <option>2021 - A</option>
                        <option>2020 - B</option>
                        <option>2020 - A</option>
                    </select>--}}

                    <div class="container">
                        <div class="" id="EstadoIndTittle">
                            <h1 id="Estado">ESTADO</h1>
                        </div>
                        <div class="row" id="headIndicacores">
                            <div class="col-lg-8">
                            </div>
                            <div class="col-lg-1" id="IndicadorDoc">
                                <div class="circulo" id="IndicadorRojo"></div> <p>Incumplido</p>  
                            </div>
                            <div class="col-lg-1" id="IndicadorDoc">
                                <div class="circulo1" id="IndicadorNaranja"></div> <p>Aceptable</p>
                            </div>
                            <div class="col-lg-1" id="IndicadorDoc">
                                <div class="circulo2" id="IndicadorVerde"></div> <p>Satisfactorio</p>
                            </div>
                        </div>
                        <div class="dropdown" id="selecPerido">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seleccione el periodo</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">2021 - A</a>
                            <a class="dropdown-item" href="">2020 - B</a>
                            <a class="dropdown-item" href="">2020 - A</a>
                        </div>
                    </div>
                    <center>
                        <div class="">
                            <button class="btn btn-primary" id="10" onclick="MostrarVentana(this.id)"> Ver Reporte General </button>
                        </div>
                        <br>
                        {{--Datos de la tabla--}}
                        <div class="row">
                            <div class="col-lg-6" id="tablaInd">
                                {{--<h6>Indicadores</h6>--}}
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
                                        <div class="lpl">
                                        <tr>
                                            <td>1</td>
                                            <td>% de ingresantes que logran el perfil de ingreso</td>
                                            <td>
                                            {{--<button id="10" onclick="color(this.id)">red </button>--}}
                                            <button class="btn btn-success btn-circle btn-sm" id="1" onclick="MostrarVentana(this.id)"> </button>
                                                    {{--<a class="btn btn-success btn-circle btn-sm" data-toggle="collapse" href="#v-pills-home" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                        verde
                                                    </a>--}}
                                            </td>     
                                        </tr>
                                        </div>                
                                        <tr>
                                            <td>2</td>
                                            <td>% de de estudiantes que logran el perfil de egreso</td>
                                            <td>
                                                <button class="btn btn-success btn-circle btn-sm" id="2" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-success btn-circle btn-sm" data-toggle="collapse" href="#v-pills-profile" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                    verde
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tasa de estudiantes en riesgo academico</td>
                                            <td> 
                                                <button class="btn btn-success btn-circle btn-sm" id="3" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-success btn-circle btn-sm" data-toggle="collapse" href="#v-pills-messages" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                    verde
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tasa de Repitencia </td>
                                            <td> 
                                                <button class="btn btn-success btn-circle btn-sm" id="4" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-success btn-circle btn-sm" data-toggle="collapse" href="#v-pills-settings" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                    verde
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tasa de Desercion</td>
                                            <td>
                                                <button class="btn btn-success btn-circle btn-sm" id="5" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-danger btn-circle btn-sm" data-toggle="collapse" href="#v-pills-cinco" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                    rojo
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>% de satisfaccion de estudiantes con la movilidad academica</td>
                                            <td> 
                                                <button class="btn btn-success btn-circle btn-sm" id="6" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-warning btn-circle btn-sm" data-toggle="collapse" href="#v-pills-seis" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    amarillo
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>% de satisfaccion de estudiantes con las actividades Extracurriculares</td>
                                            <td>
                                                <button class="btn btn-success btn-circle btn-sm" id="7" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-warning btn-circle btn-sm" data-toggle="collapse" href="#v-pills-siete" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    amarillo
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>% de satisfaccion de empleadores sobre desempeño de egresados</td>
                                            <td> 
                                                <button class="btn btn-success btn-circle btn-sm" id="8" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-success btn-circle btn-sm" data-toggle="collapse" href="#v-pills-ocho" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    verde
                                                </a>--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Tasa de insersion laboral</td>
                                            <td>
                                                <button class="btn btn-success btn-circle btn-sm" id="9" onclick="MostrarVentana(this.id)"> </button>
                                                {{--<a class="btn btn-danger btn-circle btn-sm" data-toggle="collapse" href="#v-pills-nueve" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    rojo
                                                </a>--}}
                                            </td>                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            {{--Codigo para que muestre las grafícas no cambiar id porque perjudicara--}}
                            <div class="col-lg-5"> 
                                <div id="reportPage">
                                    <br>
                                    <div class="card card-body">
                                        <h6>Reporte general de Indicadores</h6>
                                        <canvas class="ventana1" id="myChartIndicadores" width="200" height="200"></canvas>
                                        <br><br>
                                        <a target="_blanck" class="btn btn-secondary" href="{{route('imprimir')}}" {{--href="#" id="downloadPdf" data-toggle="modal" data-target="#staticBackdrop"--}}><i class="bi bi-file-bar-graph-fill"></i> Imprimir</a>
                                        {{--<button type="button" onclick="uno()">Imprime</button>--}}
                                        <a id="download"
                                                onclick="descargar(this.id)"
                                                href="http://127.0.0.1:8000/ProyectoFormacionSGC/public/img/grafico.jpeg"
                                                class="btn btn-primary float-right bg-flat-color-1"
                                                title="Descargar Gráfico">

                                                <!-- Download Icon -->
                                        <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                </div>   
                                <div id="v-pills-home" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>% de ingresantes que logran el perfil de ingreso</h6>
                                        <canvas class="ventana2" id="myChartIndicadoresDona1" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-profile" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>% de de estudiantes que logran el perfil de egreso</h6>
                                        <canvas class="ventana3" id="myChartIndicadoresDona2" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-messages" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>Tasa de estudiantes en riesgo academico</h6>
                                        <canvas class="ventana4" id="myChartIndicadoresDona3" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-settings" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>Tasa de Repitencia</h6>
                                        <canvas class="ventana5" id="myChartIndicadoresDona4" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-cinco" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>Tasa de Desercion</h6>
                                        <canvas class="ventana6" id="myChartIndicadoresDona5" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-seis" style="display:none;">
                                   <br><br>
                                    <div class="card card-body">
                                        <h6>% de satisfaccion de estudiantes con la movilidad academica</h6>
                                        <canvas class="ventana7" id="myChartIndicadoresDona6" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-siete" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>% de satisfaccion de estudiantes con las actividades Extracurriculares</h6>
                                        <canvas class="ventana8" id="myChartIndicadoresDona7" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-ocho" style="display:none;">
                                   <br><br>
                                    <div class="card card-body">
                                        <h6>% de satisfaccion de empleadores sobre desempeño de egresados</h6>
                                        <canvas class="ventana9" id="myChartIndicadoresDona8" width="200" height="200"></canvas>
                                    </div>
                                </div>
                                <div id="v-pills-nueve" style="display:none;">
                                    <br><br>
                                    <div class="card card-body">
                                        <h6>Tasa de insersion laboral</h6>
                                        <canvas class="ventana10" id="myChartIndicadoresDona9" width="200" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                                {{-- Modal --}}
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
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

    <script>
        /*var ctx = document.getElementById('myChartIndicadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
                data: {
                    labels: ['Red', 'Green', 'Yellow'],
                    datasets: [{
                        data: [12, 19, 3],
                        backgroundColor: [
                            'rgba(220, 53, 69)',
                            'rgba(40, 167, 69)',//VERDE
                            'rgba(255, 193, 7)',
                        ],
                        borderColor: [
                            'rgba(220, 53, 69)',
                            'rgba(40, 167, 69)',//VERDE
                            'rgba(255, 193, 7)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
        });
        function imprimirwi(){
        // get size of report page
    
        var reportPageHeight = $('#reportPage').innerHeight();
        var reportPageWidth = $('#reportPage').innerWidth();
        
        // create a new canvas object that we will populate with all other canvas objects
        var pdfCanvas = $('<canvas />').attr({
            id: "canvaspdf",
            width: reportPageWidth,
            height: reportPageHeight
        });
        
        // keep track canvas position
        var pdfctx = $(pdfCanvas)[0].getContext('2d');
        var pdfctxX = 0;
        var pdfctxY = 0;
        var buffer = 100;
        
        // for each chart.js chart
        $("canvas").each(function(index) {
            // get the chart height/width
            var canvasHeight = $(this).innerHeight();
            var canvasWidth = $(this).innerWidth();
            
            
            // draw the chart into the new canvas
            pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
            pdfctxX += canvasWidth + buffer;

            // our report page is in a grid pattern so replicate that in the new canvas
            if (index % 2 === 1) {
                pdfctxX = 0;
                pdfctxY += canvasHeight + buffer;
            }
        });
        
        // create new pdf and add our new canvas as an image
        var pdfReporte = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
        pdfReporte.addImage($(pdfCanvas)[0], 'PNG', 0, 0);
        // download the pdf
        pdfReporte.saveAs('reportPage.pdf');
            alert("ELLA SI TE AMA");
        }
    </script>
    
@stop
