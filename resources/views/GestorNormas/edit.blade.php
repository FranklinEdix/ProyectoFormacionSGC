@extends('adminlte::page')

@section('title', 'Admin')

@section('content')
            <section>
                <div class="container div_container" id="graficos">
                    <h4 class="bg"> &nbsp;EDITAR NORMATIVA</h4>
                    <div class="div_container3">
                        <div class="col-lg-10" id="DocTablas">
                           
                              <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <form action="/dashboard/gestionNorma/{{$normas->id}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Puntos Norma</label>
                                                    <input id="puntonorma" name ="puntonorma" type="text" class="form-control" tabindex="1" value="{{$normas->puntosnorma}}">
                                                    @error('puntonorma')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>    
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Descripción</label>
                                                    <input id="descripcion" name ="descripcion" type="text" class="form-control" tabindex="2" value="{{$normas->descripcion}}">
                                                    @error('descripcion')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Proceso</label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                                    </svg>

                                                    <select id="Procesos" name="Procesos" class="form-select">
                                                        @foreach ($procesos as $value=>$nombre)
                                                        <option value='{{$value}}'<?php if ($value==$normas->id_proceso){ ?>selected<?php } ?> >{{$nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <!--<input id="origen" name ="origen" type="text" class="form-control" tabindex="3">-->
                                                    @error('Procesos')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Origen</label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                                    </svg>
                                                    {{--<input id="origenv" name ="origenv" type="text" class="form-control" tabindex="3" value="{{$normas->origen}}"> --}}
                                                    <select class="form-select" id="tipo" name="tipo" onchange='cargarCBOrigen(this)' >
                                                        <option value="0" selected>Seleccione un Tipo</option>
                                                        <option value="1" <?php if ($normas->tipo==1){ ?>selected<?php } ?>>ISO</option>
                                                        <option value="2" <?php if ($normas->tipo==2){ ?>selected<?php } ?>>EXTERNAS</option>
                                                        <option value="3" <?php if ($normas->tipo==3){ ?>selected<?php } ?>>INTERNAS</option>
                                                        <option value="4" <?php if ($normas->tipo==4){ ?>selected<?php } ?>>OTROS</option>
                                                    </select>
                                                    <br> <br>
                                                    @error('tipo')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                    <select class="form-select" id="origen" name="origen" >
                                                        @foreach ($datosOrigenNormas as $value=>$nombre)
                                                        <option value='{{$value}}' <?php if ($normas->origen==$value){ ?>selected<?php } ?>>{{$nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('origen')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                    <a class="btn btn-outline-primary" data-toggle="modal" data-target="#norigen"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                      </svg>{{-- Nuevo Origen--}}                                                                    
                                                    </a>
                                                </div> 

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Ver Archivo</label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                    </svg>
                                                    <a class="btn btn-light" data-toggle="modal" data-target="#PDF"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                                                      </svg>{{-- Ojo--}}
                                                    
                                                    </a>

                                                </div>
                                                <div >
                                                    <label for="" class="form-label">Subir Nuevo Archivo (PDF)</label>
                                                    <input id="file" name ="file" type="file" accept=".pdf" class="form-control form-control-lg"  tabindex="4">
                                                    @error('file')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div> 
                                                <br> 
                                                <div class="modal fade" id="PDF" tabindex="-1" role="dialog" aria-labelledby="vistaTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="vistaTitle">Vista del Archivo</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <!--<img width="400px" src="{{--$normas->rpdfNorma--}}">-->
                                                          <!--<iframe src="https://drive.google.com/file/d/1jIVK5aCsjswmFfQv0Qj6MhadR96Vs6O6/preview" width="840" height="1050"></iframe>-->
                                                          <iframe src="{{$normas->rpdfNorma}}" width="740" height="600"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                
                                                <a href="/dashboard/gestionNorma" class="btn btn-info">Cancelar</a>
                                                <button type="submit" class="btn btn-danger">Guardar</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="modal fade" id="norigen" tabindex="-1" role="dialog" aria-labelledby="vistaTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                  <div class="modal-content">
                                    <form>
                                     <meta name="csrf-token" content="{{csrf_token()}}"/>
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="vistaTitle">Ingrese un nuevo Origen</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tipo</label>
                                            <select class="form-select" aria-label="Default select example" id="Tipo" name="Tipo">
                                                <option value="0" selected>Seleccione un Tipo</option>
                                                <option value="1" >ISO</option>
                                                <option value="2">EXTERNAS</option>
                                                <option value="3">INTERNAS</option>
                                                <option value="4">OTROS</option>
                                              </select>
                                            @error('Tipo')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Nombre del Origen</label>
                                              <input id="nombre" name ="nombre" type="text" class="form-control" tabindex="2">
                                              <small id="emailHelp" class="form-text text-muted">Ingrese el nombre de un ORIGEN.</small>
                                            </div>
                                            @error('descripcion')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-danger" onclick="enviarDatoss()" >Guardar</button>
                                    </div>
                                </form> 
                                  </div>
                                </div>
                                
                            </div>  
                        </div>                 
                    </div>
                </div>
            </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeSub.css') }}">
    <link rel="stylesheet" href="{{ asset('css/NormativaCss.css') }}">

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/SelectHTMLNormasNormativa.js') }}"></script>
    <script>
        function cargarCBOrigen(s){
    var tipo_filtro = s.value;
    //s.empty();
    $("#origen").empty();
    $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "GET",
            url: "{{route('agregarorigenfiltro')}}",
            data: {filtro_tipo:tipo_filtro},
            dataType:"json",
            success: function (respuesta) {
                //alert(respuesta[0]['id']);
                if(respuesta.lenght==0){
                    alert('No se encontro datos')
                }else{
                   //var datax = JSON.stringify(respuesta[0]['id']);
                   //alert(datax);
                    //var data=[{"id":1,"nombre":"ISO 9001:2015","tipo":"1","created_at":"2021-05-21 23:31:56","updated_at":"2021-05-21 23:31:56"},{"id":2,"nombre":"ISO 9001:2016","tipo":"1","created_at":"2021-05-21 23:44:37","updated_at":"2021-05-21 23:44:37"},{"id":5,"nombre":"ISO 9001:2018","tipo":"1","created_at":"2021-05-26 20:05:27","updated_at":"2021-05-26 20:05:27"}];
                    for(var i=0;i<respuesta.length;i++ ){
                        var op = document.createElement('option');
                        op.value=respuesta[i]["id"];
                        op.text=respuesta[i]["nombre"];
                        document.getElementById("origen").add(op);
                        //document.getElementById("origen").innerHTML += "<option value='"+JSON.stringify(respuesta[i]['id'])+"'>"+1+"</option>"; 
                    }
                }
                //console.table(respuesta);
            },
            error: function () {
                alert("ERROR: Algo salió mal, intentalo de nuevo.");
            }
        });
}

function enviarDatoss(){
  
  var nombre = document.getElementById("nombre").value;
  var tipo = document.getElementById("Tipo").value;
  
      if(tipo=="0"){
          alert("SELECCIONE UN TIPO");
      }else{
          if(nombre==null){
              alert("INGRESE UN NOMBRE");
          }else{
              $.ajaxSetup({
              headers:{
                  'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
              method: "POST",
              url: "{{route('agregarorigen')}}",
              data: {nombre:nombre,ntipo:tipo},
              success: function (respuesta) {
                  $('#norigen').modal('hide')
                  document.getElementById("nombre").value = "";
                  $("#origen").empty();
                  document.getElementById("tipo").options.selectedIndex = 0;
                  alert(respuesta);
              },
              error: function () {
                  alert("ERROR: Algo salió mal, intentalo de nuevo.");
              }
          });
          }
          
          }
  }
    </script>
@stop
