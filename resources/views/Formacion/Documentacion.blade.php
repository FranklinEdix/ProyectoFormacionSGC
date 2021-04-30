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
                    <div class="card-header text-center bg_procesos"  id="targetas">Nivelación</div>
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
            <div class="div_container container" id="graficos">
            <h4 class="bg">&nbsp; Documentación</h4><br>
            
                
                    <div class="container" id="graficos">
                    
                    
                    </div>
                    {{--<div class="container" id="BotPdfReport">
                        <div class="" id="pdfReporteGeneral">
                            <a href="https://lucid.app/lucidchart/invitations/accept/inv_df370760-430a-4b8f-8d92-2da8f825c738" target="_blank"><button class="btn btn-success" ><i class="fas fa-file-pdf"></i> Editar</button></a>
                        </div>
                    </div>--}}
                
           
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10" id="DocTablas">
                            
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active bg_filtro " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Formación</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link bg_filtro" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nivelación-Integresantes</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link bg_filtro" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Enseñanza-Aprendizaje</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg_filtro" id="pills-SegEs-tab" data-toggle="pill" href="#pills-SegEs" role="tab" aria-controls="pills-SegEs" aria-selected="false">Seguimiento-Estudiante</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg_filtro" id="pills-MovAc-tab" data-toggle="pill" href="#pills-MovAc" role="tab" aria-controls="pills-MovAc" aria-selected="false">Movilidad-Académica</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg_filtro" id="pills-AcExt-tab" data-toggle="pill" href="#pills-AcExt" role="tab" aria-controls="pills-AcExt" aria-selected="false">Actividades-Extracurriculares</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg_filtro" id="pills-SegEg-tab" data-toggle="pill" href="#pills-SegEg" role="tab" aria-controls="pills-SegEg" aria-selected="false">Seguimiento-Egresados</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Plan Anual de Trabajo para
                                                la Formación</td>
                                            <td>Anual</td>
                                          </tr>
                                          <tr>
                                            <td>Manual del proceso
                                                Formación</td>
                                            <td>Permanente</td>
                                          </tr>
                                          <tr>
                                            <td>Informe periódico de la
                                                Formación
                                            <td>Semestral</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de gestión de la
                                                Formación</td>
                                            <td>Anual</td>
                                          </tr>
                                          <tr>
                                            <td>Propuesta de acciones
                                                correctivas para la
                                                Formación</td>
                                            <td>Anual</td>
                                            
                                          </tr>
                                          <tr>
                                            <td>Plan de mejora para la
                                                Formación</td>
                                            <td>Anual</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Reporte de desempeño de
                                                ingresantes</td>
                                            <td>Anual</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de evaluación del
                                                Plan de nivelación</td>
                                            <td>Anual</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Informes de medición del
                                                perfil de egreso</td>
                                            <td>Semestral</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de evaluación de la
                                                Enseñanza-Aprendizaje</td>
                                            <td>Semestral</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="pills-SegEs" role="tabpanel" aria-labelledby="pills-SegEs-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Reporte de desempeño de
                                                estudiantes</td>
                                            <td>Mensual</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de ejecución del
                                                programa de reforzamiento
                                                académico</td>
                                            <td>Anual</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="pills-MovAc" role="tabpanel" aria-labelledby="pills-MovAc-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Resultados de encuestas de
                                                satisfacción de estudiantes
                                                sobre la movilidad
                                                académica</td>
                                            <td>Semestral</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de evaluación de la
                                                eficacia de la movilidad
                                                académica</td>
                                            <td>Semestral</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div> 
                                <div class="tab-pane fade" id="pills-AcExt" role="tabpanel" aria-labelledby="pills-AcExt-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Resultados de encuestas de
                                                satisfacción de estudiantes
                                                sobre las actividades
                                                extracurriculares</td>
                                            <td>Semestral</td>
                                          </tr>
                                          <tr>
                                            <td>Informe de evaluación de la
                                                eficacia de las actividades
                                                extracurriculares</td>
                                            <td>Semestral</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="pills-SegEg" role="tabpanel" aria-labelledby="pills-SegEg-tab">
                                    <div class="row">
                                        {{--Buscar en el crud--}}
                                            <div class="col-lg-9" id="BuscarDocumentacion">
                                                    <form class="form-inline position-relative my-2 d-inline-block">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                                                    </form>
                                                    <button class="navbar-toggler sm-mr-6" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                            </div>
                                            <div class="col-lg-2" id="Crear">
                                                <a href=""><button class="btn btn-primary"> <i class="bi bi-plus"></i> Crear </button></a>
                                            </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Evidencia</th>
                                            <th scope="col">Tiempo de Concervación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Tasa de inserción laboral de
                                                egresados</td>
                                            <td>Anual</td>
                                          </tr>
                                          <tr>
                                            <td>Reporte de satisfacción de
                                                empleadores sobre
                                                desempeño de egresados</td>
                                            <td>Anual</td>
                                          </tr>
                                          <tr>
                                            <td>Reporte de satisfacción de
                                                egresados sobre su
                                                Formación</td>
                                            <td>Anual</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>    
                              </div>
                        </div>
                    </div>
                </div>
            
        </div>

        </section>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
@stop
