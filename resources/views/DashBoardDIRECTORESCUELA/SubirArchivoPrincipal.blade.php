@extends('adminlte::page')

@section('title', 'Formación-Director')

@section('content_header')
<div class="d-flex">
    <div class="w-100">
        <div id="content">
            <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12" id="fon">
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
         
                {{-- las targetas como opciones --}}
                @include('layouts.TargetsDirector')
                <section>
                                 
                        <div class="container div_container" id="graficos">
                    
                            <h4 class="bg">&nbsp; Evidencias</h4><br>
                    
                            <h5 class="parraf_formacion">Lista de evidencias</h5> 
                                <center>
                                <div class="TablaFormcionEvidenciasDirector">
                                    <div class="col-sm-offset-1 col-sm-10">
                                    <table id="table_id" class="table table-bordered table-striped table-hover">
                                                     <thead>
                                                         <tr>
                                                             <th>No.</th>
                                                             <th>Titulo</th>
                                                             <th>Tiempo de conservación</th>
                                                             <th>Estado</th>
                                                             <th>Opciones</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td class="text-center">01</td>
                                                             <td>Plan anual de trabajo para la formación</td>
                                                             <td>Anual</td>
                                                             <td class="txt-estado">
                                                             <div  title="Subir Plan Anual de Trabajo para la Formación">
                                                               <a type="button" data-toggle="modal" data-target="#ModalSubirDocumento">
                                                                 <svg id="icon_cambiar_color" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                                     <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                                                     <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                                                 </svg>     
                                                               </a>
                                                             </div>
                                                             </td>
                                                             <td class="text-center"></td>
                                                         </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </center>             
                </div>
          
            </section>
            <div class="modal fade" id="ModalSubirDocumento" tabindex="-1" role="dialog" aria-labelledby="vistaTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centeredrole=" document>
                  <div class="modal-content">
                    <form enctype="multipart/form-data" id="FormDataDocument">
                     <meta name="csrf-token" content="{{csrf_token()}}"/>
                    <div class="modal-header">
                      <h5 class="modal-title" id="vistaTitle">Ingrese un nuevo Plan anual</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="mb-3">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Descripción del Plan anual de trabajo para la formación</label>
                              <input id="descripcion" name ="descripcion" type="text" class="form-control" tabindex="2">
                              <small id="emailHelp" class="form-text text-muted">Ingrese Descripción.</small>
                            </div>
                            @error('descripcion')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Fecha</label>
                              <input id="fecha" name ="fecha" type="date" class="form-control" tabindex="2">
                              <small id="emailHelp" class="form-text text-muted">Ingrese fecha.</small>
                            </div>
                            @error('descripcion')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tiempo de Vigencia</label>
                              <input id="tiempo" name ="tiempo" type="text" class="form-control" tabindex="2">
                              <small id="emailHelp" class="form-text text-muted">Ingrese Tiempo de Vigencia.</small>
                            </div>
                            @error('descripcion')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Estado de Vigencia</label>
                              <input id="nombre" name ="nombre" type="text" class="form-control" tabindex="2">
                              <small id="emailHelp" class="form-text text-muted">Ingrese Estado de Vigencia.</small>
                            </div>
                            @error('descripcion')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Documento</label>
                              <input id="documento" name ="documento" type="file" class="form-control" tabindex="2">
                              <small id="emailHelp" class="form-text text-muted">Ingrese Documento.</small>
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
@stop

@section('css')
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
@stop

@section('js')
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/graficoDeBarras.js"></script>
    <script src="js/graficoPastel.js"></script>
    <script>

function enviarDatoss(){
    /*var descripcion = document.getElementById("descripcion").value;
    var fecha = document.getElementById("fecha").value;
    var tiempo = document.getElementById("tiempo").value;*/
    var w = "WANDA";

    //let documento = new FormData(FormDataDocument);
    //pdf.append('documento',documento);
    //var request = new XMLHttpRequest();
    // POST to httpbin which returns the POST data as JSON

    //var formData = new FormData(document.getElementById("FormDataDocument"));//FormDataDocument
    

    //request.send(formData);
    //console.log(formData.get("documento"));

   $.ajaxSetup({
              headers:{
                  'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
              }
          });
    //var nombre="JO JO JO"
    $.ajax({
              method: "POST",
              url: "{{route('agregar_documento_plan_anual')}}",
              data: {w:w},
              success: function (respuesta) {
                    
                  alert(respuesta);
                  $('#ModalSubirDocumento').modal('hide');
                  document.getElementById("descripcion").value = "";
              },
              error: function () {
                  alert("ERROR: Algo salió mal, intentalo de nuevo.");
              }
          });
  /*var nombre = document.getElementById("nombre").value;
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
              url: "{{route('agregar_documento_plan_anual')}}",
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
          
          }*/
  }
    </script>



@stop