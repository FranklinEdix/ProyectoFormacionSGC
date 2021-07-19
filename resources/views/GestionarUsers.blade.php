@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

@stop

@section('content') 
    <div class="container">
        <center>
            <div class="tituloGestorUsers">
                <h1>Gestor de Usuarios del Sistema</h1>
            </div>
        </center>
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-sgc-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">SGC</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Director de Escuela</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Decano</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Registros Academicos</a>
                <a class="nav-link" id="v-pills-admision-tab" data-toggle="pill" href="#v-pills-admision" role="tab" aria-controls="v-pills-admision" aria-selected="false">Admisión</a>
                <a class="nav-link" id="v-pills-docente-tab" data-toggle="pill" href="#v-pills-docente" role="tab" aria-controls="v-pills-docente" aria-selected="false">Docente</a>
                <a class="nav-link" id="v-pills-docenteTutor-tab" data-toggle="pill" href="#v-pills-docenteTutor" role="tab" aria-controls="v-pills-docenteTutor" aria-selected="false">Docente Tutor</a>
                <a class="nav-link" id="v-pills-psicopedagogia-tab" data-toggle="pill" href="#v-pills-psicopedagogia" role="tab" aria-controls="v-pills-psicopedagogia" aria-selected="false">Director de Unidad de Psicopedagogía</a>
                <a class="nav-link" id="v-pills-relInternacional-tab" data-toggle="pill" href="#v-pills-relInternacional" role="tab" aria-controls="v-pills-relInternacional" aria-selected="false">Director de Relaciones Internacionales</a>
                <a class="nav-link" id="v-pills-pedaCurriculo-tab" data-toggle="pill" href="#v-pills-pedaCurriculo" role="tab" aria-controls="v-pills-pedaCurriculo" aria-selected="false">Director Unidad de Pedagogía y Currículo</a>
                <a class="nav-link" id="v-pills-ATT-tab" data-toggle="pill" href="#v-pills-ATT" role="tab" aria-controls="v-pills-ATT" aria-selected="false">ATT y Seguimiento Egresado</a>
                <a class="nav-link" id="v-pills-v_academico-tab" data-toggle="pill" href="#v-pills-v_academico" role="tab" aria-controls="v-pills-v_academico" aria-selected="false">Virrectorado Academico</a>
            </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="w-100">
                    <center>
                        <h4 id="NombreRol_1">Usuarios de Sistema de Gestión de Calidad</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 1)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <center>
                        <h4 id="NombreRol_2">Usuarios con el Rol de Director de Escuela</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 2)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <center>
                        <h4 id="NombreRol_3">Usuarios con el Rol de Decano</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 3)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <center>
                        <h4 id="NombreRol_4">Usuarios de Registros Academicos</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 4)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-admision" role="tabpanel" aria-labelledby="v-pills-admision-tab">
                    <center>
                        <h4 id="NombreRol_5">Usuarios con el Rol Admision</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 5)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-docente" role="tabpanel" aria-labelledby="v-pills-docente-tab">
                    <center>
                        <h4 id="NombreRol_6">Usuarios con el Rol de Docente</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 6)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-docenteTutor" role="tabpanel" aria-labelledby="v-pills-docenteTutor-tab">
                    <center>
                        <h4 id="NombreRol_7">Usuarios con el Rol de Docente Tutor</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 7)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-psicopedagogia" role="tabpanel" aria-labelledby="v-pills-psicopedagogia-tab">
                    <center>
                        <h4 id="NombreRol_8">Usuarios con el Rol de Director Unidad de Psicopedagogia</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 8)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-relInternacional" role="tabpanel" aria-labelledby="v-pills-relInternacional-tab">
                    <center>
                        <h4 id="NombreRol_9">Usuarios con el Rol de Director de relaciones Internacionales</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 9)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-pedaCurriculo" role="tabpanel" aria-labelledby="v-pills-docente-tab">
                    <center>
                        <h4 id="NombreRol_10">Usuarios con el Rol de Director de Unidad de Pedagogía y Currículo</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 10)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-ATT" role="tabpanel" aria-labelledby="v-pills-ATT-tab">
                    <center>
                        <h4 id="NombreRol_11">Usuarios con el Rol de ATT y Seguimiento Egresado</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 11)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="v-pills-v_academico" role="tabpanel" aria-labelledby="v-pills-v_academico-tab">
                    <center>
                        <h4 id="NombreRol_12">Usuarios con el Rol de Virectorado Académico</h4>
                    </center>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID USUARIO</th>
                              <th scope="col">USUARIO</th>
                              <th scope="col">ESCUELA</th>
                              <th scope="col">FACULTAD</th>
                              <th scope="col">SEDE</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTablaUser">
                          
                          @foreach ($usuarios as $usuario)
                            @if($usuario->Id_Rol == 12)
                              <tr>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->name}}</td>
                                  <td>{{$usuario->Id_Rol}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      {{--<form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
                                          <a href="gestionNorma/{{$norma->id}}/edit" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                          </svg></a> 
                                          <button class="btn btn-light" type="button" data-toggle="modal" id="{{$norma->rpdfNorma}}" onclick="OpenModalPDF(this)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>                                                                    
                                          </button>
                                                                                                               
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                          </button> 
                                      </form>--}}
                                  </td>
                              </tr>
                            @endif
                          @endforeach
                      
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
              <div class="modal fade" id="ViewPDF" tabindex="-1" role="dialog" aria-labelledby="vistaTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="vistaTitle">Vista del Archivo</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" >
                     {{--<!--<iframe src="{{$norma->rpdfNorma}}" width="740" height="600"></iframe>-->--}}
                     <iframe id="iframePDF" width="740" height="600"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/dashboar_Principal.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/GestionarUser.css">
@stop

@section('js')

@stop
