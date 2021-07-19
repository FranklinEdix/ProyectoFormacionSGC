@extends('adminlte::page')

@section('title', 'Calendario Academico')

@section('content_header')

<div id="VolverPrincipal">
    <a href="{{ url('/dashboardFormacion?variable=1') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
      </svg> Formación</a>
</div>
<div class="d-flex">
<div class="w-100">
@stop

@section('content')

    <div id="content">
                <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <h1>ENSEÑANZA APRENDIZAJE</h1>
                              <p class="parraf_formacion">
                                  Este proceso se aplica a Estudiantes, Docentes. Escuela de Formación profecional y Departamento Académico
                                  ,se inicia con la planificaión de la enseñanza-aprendizaje y culmina con su evaluación.
                              </p>    
                          </div>
                      </div>

                      
                </section>
                  <div class="container div_container2" id="graficos">

                      <h4 class="bg">&nbsp; SÍLABOS</h4><br>
                     
                        <div class="caja flex">

                        <div class="progrmas1">
                          <nav id="LC">
                                    <ul id="Fernan">
                                        <li> <a  id="pl" href="#"> PROGRAMAS <ion-icon name="arrow-dropdown-circle"></ion-icon></i> </a>
                                              <ul>
                                                <li> <a href="#"> Oxapampa</a> </li>
                                                <li> <a href="#"> YANAHUANCA</a>  </li>
                                                <li> <a href="#"> PASCO</a></li>
                                              </ul>
                                        </li>
                                    </ul>
                          </nav>

                        </div>

                        <div class="EFE container">
                            <b>Filtro <ion-icon name="fastforward"></ion-icon> </b>
                              <input type="text" name="search" placeholder="search..."
                              class="src" autocomplete="off">
                              
                              <button type="submit" class="btn btn-search fa fa-search"></button>
                        </div>

                        </div>  

 

        
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Curso</th>
              <th scope="col">Semestre</th>
              <th scope="col">Estado</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>17101</td>
              <td>Matemática Básica</td>
              <td>XI</td>
              <td>Subido</td>                   
              <td><a class="btn btn-light" data-toggle="modal" data-target=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg></td>
            </tr>
                                         
          </tbody>
        </table>
        <h4 class="Present_S">Presentación de Sílabos</h4>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">N° Directiva</th>
              <th scope="col">Titulo</th>
              <th scope="col">Semestre</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>004-2021.dpu/vracl</td>
              <td>Informes de medición del perfil de egreso</td>
              <td>2021-A</td>
                                      
              <td><div class="circulo" id="EstadoDocEnseAprendizaje1"></div></td>
              <td><a class="btn btn-light" data-toggle="modal" data-target=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg></td>
            </tr>
            <tr>
              <td>004-2021.dpu/vracl</td>
              <td>Informes de medición del perfil de egreso</td>
              <td>2021-A</td>
                                      
              <td><div class="circulo" id="EstadoDocEnseAprendizaje1"></div></td>
              <td><a class="btn btn-light" data-toggle="modal" data-target=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg></td>
            </tr>
                                         
          </tbody>
        </table>
        
    </div>
</section>
@stop

@section('css')
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TargetsHover/EnseñanzaAprendizaje.css') }}">
@stop

@section('js')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/graficoDeBarrasNivelacion.js') }}"></script>
    <script src="{{ asset('js/graficoPastelNivelacion.js') }}"></script>
@stop