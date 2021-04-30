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
                        <a href="dashboard/Nivelacion/Principal?variable=2" id="verMas" class="color" >Ver más <img  class="card__image icon_card icon-right"  src="https://image.flaticon.com/icons/png/512/189/189689.png" width="24" height="24" ></img></a>
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
                    <h4 class="bg"> &nbsp;Diagrama de Flujo del Macroproceso Formación</h4>
                    <div class="row">
                        <div class="col-lg-12" id="flujos">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    {{--<center>
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Diagrama de Flujo del Macroproceso Formación</a>
                                    </center>--}}
                                </li>
                              </ul>
                              <div class="" id="pdfReporteGeneral">
                                <a href="https://lucid.app/lucidchart/invitations/accept/inv_df370760-430a-4b8f-8d92-2da8f825c738" target="_blank"><button class="btn btn-success" ><i class="fas fa-edit"></i> Editar</button></a>
                            </div>
                            <center>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><div style="width: 960px; height: 720px; margin: 10px; position: relative;"><iframe allowfullscreen frameborder="0" style="width:960px; height:720px" src="https://lucid.app/documents/embeddedchart/5fffa894-de91-4ac6-8a56-bfba10bc685c" id="A3_w~~.~oZPG"></iframe></div></div>
                              </div></center>
                        </div>             
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
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
@stop
