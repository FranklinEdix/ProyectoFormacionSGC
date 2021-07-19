<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReporteSGC</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: rgb(19, 175, 236); 
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
                          
            background-color: #72c1d4;
            color: white;
            text-align: center;
            line-height: 35px;
        }
        h1{
            color: black;
            font-size: 27px;
        }
        p{
            color: red;
            top: 2cm;
        }
        h2{
            color: red;
            font-size: 20px;
        }
        
    </style>
</head>
<body>
   
    <header>
        <h1>OFICINA GESTION DE CALIDAD - UNDAC </h1>  
    </header>

    <main>
        <center>
            <p>REPORTE GENERAL DE INDICADORES</p> 
            {{--<div> <img src="{{ public_path('img/2.jpeg')}}" width="30%" height="30%"/> </div>--}}
            <div> <img src="{{ public_path('img/ChartImage.jpeg')}}"> </div>
            
            {{--<img src="https://quickchart.io/chart?c={type:'bar',data:{labels:[2012,2013,2014,2015,2016],datasets:[{label:'Users',data:[120,60,50,180,120]}]}}" format=jpeg>--}}
        </center>
    </main>

    <footer>
        <h2> 
            Pagina 1|1
        </h2>
    </footer>

    <div> <canvas  id="myChart" width="100" height="100"></canvas> </div>

</body>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
<script src="{{ asset('js/IndicadoresPastel.js') }}"></script>--}}
</html>
{{--<div class="circulo" id="EstadoDocFormacion1"></div>--}}