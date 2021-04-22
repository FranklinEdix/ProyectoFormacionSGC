@extends('adminlte::page')

@section('title', 'Nivelacion')

@section('content_header')
<div class="d-flex">
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
                <a href="Nivelacion/Principal" id="verMas" class="color" >Ver más <img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
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
                Ver más <a href="#" class="color" ><img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
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
@stop

@section('content')
    <div class="w-100">
        <div id="content">
            <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h1>NIVELACIÓN</h1>
                    <p>Este proceso se aplica a estudiantes del primer año de pregrado, que muestran dificultades academicas en las competencias genericas 
                        de comunicacion y razonamiento matematicoa a la escuela profesional y se inicia con la generacion del reporte de desempeño de ingresantes
                        y culmina con la evaluacion del plan de nivelacion.
                    </p>    
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
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
      </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="../js/graficoDeBarrasNivelacion.js"></script>
    <script src="../js/graficoPastelNivelacion.js"></script>
@stop