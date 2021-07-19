@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<div class="d-flex">
    <div class="w-100">
        <div id="content">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h1>GESTOR DE NORMAS</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
    <div class="div_container2">
        <div class="row3">
            <!--aqui modificand-->
            <div>
                 <b>Subir</b> <a href="gestionNorma/create" class="btn btn-info"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 20 20">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
              </svg>
            </a>
        </div>
                
                <section>
                    <meta name="csrf-token" content="{{csrf_token()}}"/>           
                    <table id="normasTable" class="table table-striped table-dark">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">N°</th>
                              <th scope="col">PUNTOS NORMA</th>
                              <th scope="col">DESCRIPCIÓN</th>
                              <th scope="col">ORIGEN</th>
                              <th scope="col">PROCESO</th>
                              <th scope="col">ACCIONES</th>
                          </tr>
                      </thead>
                     <tbody id="cuerpoTabla">
                          
                          @foreach ($normas as $norma)
                              <tr>
                                  <td>{{$norma->id}}</td>
                                  <td>{{$norma->puntosnorma}}</td>
                                  <td>{{$norma->descripcion}}</td>
                                  <td>{{$norma->nombre}}</td>
                                  <td>{{$norma->id_proceso}}</td>
                                  <td>
                                      <form action="{{route('gestionNorma.destroy', $norma->id)}}" method="POST">
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
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      
                      </tbody>
                  </table>

              </section>
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
    <link rel="stylesheet" href="/btn.css">
    <link rel="stylesheet" href="/css/fondos_bordes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/NormativaCss.css') }}">

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/SelectHTMLNormasNormativa.js') }}"></script>
    <script src="{{ asset('css/indexGestorNorma.css') }}"></script>
    {{--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>Vetado--}}
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#normasTable').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,'All']]
        });
    } );
        function OpenModalPDF(objeto){
            var ruta = objeto.getAttribute("id");
            var iframe = document.getElementById("iframePDF");
            iframe.setAttribute("src", ruta);
            $('#ViewPDF').modal('show')
        }
        /*function fillterTABLE(filtro){
            $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
            method: "GET",
            url: "{{route('filtroNorma')}}",
            data: {filtro:filtro},
            success: function (respuesta) {
                //alert(respuesta)
                //console.table(respuesta);
                if(respuesta.length==0){
                    alert("No se encontraron datos.");
                }else{
                    
                    loadBodyTABLE(respuesta)
                }
                
            },
            error: function () {
                alert("ERROR: Algo salió mal, intentalo de nuevo.");
            }
        });
        }*/
        
    </script>
@stop
