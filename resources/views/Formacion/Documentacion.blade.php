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
                  {{--Buscar entre los documentos--}}
                    <div class="" id="EstadoDocTittle">
                      <h1 id="Estado">ESTADO</h1>
                    </div>
                    <div class="row" id="headDoc">
                      <div class="col-lg-8">
                        <div class="form-inline position-relative my-2 d-inline-block">    
                          <input class="form-control mr-sm-2" type="search" placeholder="Buscar documentos..." aria-label="Buscar" id="formulario">
                          {{--<button class="btn btn-search position-absolute" id="boton" onclick="buscara()"><i class="icon ion-md-search"></i></button>
                        --}}</div>
                      </div>
                      <div class="col-lg-1" id="IndicadorDoc">
                        <div class="circulo" id="IndicadorRojo"></div> <p>Sin Subir</p>  
                      </div>
                      <div class="col-lg-1" id="IndicadorDoc">
                        <div class="circulo1" id="IndicadorNaranja"></div> <p>Subido</p>
                      </div>
                      <div class="col-lg-1" id="IndicadorDoc">
                        <div class="circulo2" id="IndicadorVerde"></div> <p>Verificado</p>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10" id="DocTablas"> 
                        <div id="filtroDoc">
                          <center>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active bg_filtro" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Formación</a>
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
                            </center> 
                            </div> 
                            <br> 
                              <div class="tab-content" id="pills-tabContent">
                                {{--Documentacion Formacion--}}
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    {{--Plan Anual de Trabajo para
                                          la Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg>  Plan Anual de Trabajo para
                                          la Formación</h3>
                                        </div>
                                        {{--El filtro por programas--}}
                                        <div class="col-lg-4">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Programa</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">INGENÍERIA</a>
                                            <a class="dropdown-item" >MINAS</a>
                                          </div>
                                        </div> 
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
                                            <td>Anual</td>
                                            <td><div class="circulo" id="EstadoDocFormacion1"></div></td>
                                            <td><a id="1" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br>
                                      {{--Manual del proceso Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Manual del proceso Formación</h3>
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
                                          <td><div class="circulo" id="EstadoDocFormacion2"></div></td>
                                          <td><a id="2" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>

                                    {{--Informe periódico de la Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Informe periódico de la Formación</h3>
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
                                          <td><div class="circulo" id="EstadoDocFormacion3"></div></td>
                                          <td><a id="3" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    
                                    {{--Informe de gestión de la Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Informe de gestión de la Formación</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion4"></div></td>
                                          <td><a id="4" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>

                                    {{--Propuesta de acciones correctivas para la Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Propuesta de acciones correctivas para la Formación</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion5"></div></td>
                                          <td><a id="5" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>

                                    
                                    {{--Plan de mejora para la Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Plan de mejora para la Formación</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion6"></div></td>
                                          <td><a id="6" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    
                                </div>
                                    {{--Documentacion Nivelacion-Ingresante--}}
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    {{--Reporte de desempeño de ingresantes--}}
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-lg-8" id="Tittle" >
                                                <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                                </svg> Reporte de desempeño de ingresantes</h3>
                                              </div>
                                              {{--El filtro por programas--}}
                                              <div class="col-lg-4">
                                                <div class="dropdown">
                                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Seleccione un Programa</button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="#">INGENÍERIA</a>
                                                  <a class="dropdown-item" >MINAS</a>
                                                </div>
                                              </div> 
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
                                                  <td>Anual</td>
                                                  <td><div class="circulo" id="EstadoDocFormacion7"></div></td>
                                                  <td><a id="7" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg></a></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <br>

                                            {{--Informe de evaluación del Plan de nivelación--}}
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-lg-8" id="Tittle" >
                                                <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                                </svg> Informe de evaluación del Plan de nivelación</h3>
                                              </div>
                                              {{--El filtro por programas--}}
                                              <div class="col-lg-4">
                                                <div class="dropdown">
                                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Seleccione un Programa</button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="#">INGENÍERIA</a>
                                                  <a class="dropdown-item" >MINAS</a>
                                                </div>
                                              </div> 
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
                                                  <td>Anual</td>
                                                  <td><div class="circulo" id="EstadoDocFormacion8"></div></td>
                                                  <td><a id="8" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg></a></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <br>
                                </div>

                                {{--Documentacion Enseñanza-Aprendizaje--}}
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    {{--Informes de medición del perfil de egreso--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-6" id="Tittle" >
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Informes de medición del perfil de egreso</h3>
                                        </div>
                                        {{--El filtro por programas--}}
                                        <div class="col-lg-2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Programa</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">INGENÍERIA</a>
                                            <a class="dropdown-item" >MINAS</a>
                                          </div>
                                        </div> 
                                        </div>
                                        {{--Filtro por cursos--}}
                                        <div class="col-lg-2" id="Filtro2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Curso</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Mate</a>
                                            <a class="dropdown-item" >Excel</a>
                                          </div>
                                        </div> 
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
                                            <td><div class="circulo" id="EstadoDocFormacion9"></div></td>
                                            <td><a id="9" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br>

                                      {{--Informe de evaluación de la Enseñanza-Aprendizaje--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-6" id="Tittle" >
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Informe de evaluación de la Enseñanza-Aprendizaje</h3>
                                        </div>
                                        {{--El filtro por programas--}}
                                        <div class="col-lg-2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Programa</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">INGENÍERIA</a>
                                            <a class="dropdown-item" >MINAS</a>
                                          </div>
                                        </div> 
                                        </div>
                                        {{--Filtro por cursos--}}
                                        <div class="col-lg-2" id="Filtro2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Curso</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Mate</a>
                                            <a class="dropdown-item" >Excel</a>
                                          </div>
                                        </div> 
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
                                            <td><div class="circulo" id="EstadoDocFormacion10"></div></td>
                                            <td><a id="10" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br>
                                </div>

                                {{--Documentacion Seguimiento-Estudiante--}}
                                <div class="tab-pane fade" id="pills-SegEs" role="tabpanel" aria-labelledby="pills-SegEs-tab">
                                    {{--Reporte de desempeño de estudiantes--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-5" id="Tittle" >
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Reporte de desempeño de estudiantes</h3>
                                        </div>
                                        {{--El filtro por programas--}}
                                        <div class="col-lg-2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Programa</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">INGENÍERIA</a>
                                            <a class="dropdown-item" >MINAS</a>
                                          </div>
                                        </div> 
                                        </div>
                                        {{--Filtro por semestres--}}
                                        <div class="col-lg-2" id="Filtro2">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Semestre</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">I</a>
                                            <a class="dropdown-item" >II</a>
                                          </div>
                                        </div> 
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
                                            <td>Mensual</td>
                                            <td><div class="circulo" id="EstadoDocFormacion11"></div></td>
                                            <td><a id="11" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br>

                                      {{--Informe de ejecución del programa de reforzamiento académico--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle" >
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Informe de ejecución del programa de reforzamiento académico</h3>
                                        </div>
                                        {{--El filtro por programas--}}
                                        <div class="col-lg-4">
                                          <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Seleccione un Programa</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">INGENÍERIA</a>
                                            <a class="dropdown-item" >MINAS</a>
                                          </div>
                                        </div> 
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
                                            <td>Anual</td>
                                            <td><div class="circulo" id="EstadoDocFormacion12"></div></td>
                                            <td><a id="12" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br>
                                </div>

                                {{--Documentacion Movilidad-Academica--}}

                                <div class="tab-pane fade" id="pills-MovAc" role="tabpanel" aria-labelledby="pills-MovAc-tab">
                                  {{--Resultados de encuestas de satisfacción de estudiantes sobre las actividades extracurriculares--}}
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-lg-8" id="Tittle">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                        </svg> Resultados de encuestas de satisfacción de estudiantes sobre la movilidad académica</h3>
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
                                        <td><div class="circulo" id="EstadoDocFormacion13"></div></td>
                                        <td><a id="13" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg></a></td>
                                      </tr>
                                    </tbody>
                                  </table> 
                                  <br> 
                                  
                                  {{--Informe de evaluación de la eficacia de la movilidad académica--}}
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-lg-8" id="Tittle">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                        </svg> Informe de evaluación de la eficacia de la movilidad académica</h3>
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
                                        <td><div class="circulo" id="EstadoDocFormacion14"></div></td>
                                        <td><a id="14" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg></a></td>
                                      </tr>
                                    </tbody>
                                  </table>  
                                  <br>
                                </div> 

                                {{--Documentacion Actividades-Extracurriculares--}}
                                
                                <div class="tab-pane fade" id="pills-AcExt" role="tabpanel" aria-labelledby="pills-AcExt-tab">
                                  {{--Resultados de encuestas de satisfacción de estudiantes sobre las actividades extracurriculares--}}
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-lg-8" id="Tittle">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                        </svg> Resultados de encuestas de satisfacción de estudiantes sobre las actividades extracurriculares</h3>
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
                                        <td><div class="circulo" id="EstadoDocFormacion15"></div></td>
                                        <td><a id="15" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg></a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                  {{--Informe de evaluación de la eficacia de las actividades extracurriculares--}}
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-lg-8" id="Tittle">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                        </svg> Informe de evaluación de la eficacia de las actividades extracurriculares</h3>
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
                                        <td><div class="circulo" id="EstadoDocFormacion16"></div></td>
                                        <td><a id="16" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg></a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                
                                {{--Documentacion Seguimiento-Egresado--}}
                                <div class="tab-pane fade" id="pills-SegEg" role="tabpanel" aria-labelledby="pills-SegEg-tab">
                                    {{--Tasa de inserción laboral de egresados--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Tasa de inserción laboral de egresados</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion17"></div></td>
                                          <td><a id="17" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    
                                    {{--Reporte de satisfacción de empleadores sobre desempeño de egresados--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Reporte de satisfacción de empleadores sobre desempeño de egresados</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion17"></div></td>
                                          <td><a id="17" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    {{--Reporte de satisfacción de egresados sobre su Formación--}}
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-8" id="Tittle">
                                          <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                          </svg> Reporte de satisfacción de egresados sobre su Formación</h3>
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
                                          <td>Anual</td>
                                          <td><div class="circulo" id="EstadoDocFormacion18"></div></td>
                                          <td><a id="18" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" onclick="AbrirDoc(this.id)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                </div>
                                {{--MODAL--}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body" id="MostrarDoc">
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-----------------------------------------}}    
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
    <script src="{{ asset('js/BuscadorDocumentosFormacion.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@stop
