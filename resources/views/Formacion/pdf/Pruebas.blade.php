<?php 
use Dompdf\Dompdf; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola mudo xD</h1>
    <a href="#" id="downloadPdf">Download Report Page as PDF</a>
    <br/><br/>
    <div id="reportPage">
    <div id="chartContainer" style="width: 30%;float: left;">
        <canvas id="myChart"></canvas>
    </div>

    <div style="width: 30%; float: left;">
        <canvas id="myChart2"></canvas>
    </div>

    <br/><br/><br/>

    <div style="width: 30%; height: 400px; clear: both;">
        <canvas id="myChart3" style="width: 40%"></canvas>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/polyfills.umd.js"></script>
<script> 
    var mybar = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(mybar, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    var mybar2 = document.getElementById('myChart2').getContext('2d');
    var myChart2 = new Chart(mybar2, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    var mybar3 = document.getElementById('myChart3').getContext('2d');
    var myChart3 = new Chart(mybar3, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
                                                    }
        }
    });
      
      $('#downloadPdf').click(function(event) {
        // get size of report page
        var reportPageHeight = $('#reportPage').innerHeight();
        var reportPageWidth = $('#reportPage').innerWidth();
        
        // create a new canvas object that we will populate with all other canvas objects
        var pdfCanvas = $('<canvas />').attr({
          id: "canvaspdf",
          width: reportPageWidth,
          height: reportPageHeight
        });
        
        // keep track canvas position
        var pdfctx = $(pdfCanvas)[0].getContext('2d');
        var pdfctxX = 0;
        var pdfctxY = 0;
        var buffer = 100;

        // for each chart.js chart
        $("canvas").each(function(index) {
          // get the chart height/width
          var canvasHeight = $(this).innerHeight();
          var canvasWidth = $(this).innerWidth();
          
          // draw the chart into the new canvas
          pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
          pdfctxX += canvasWidth + buffer;
          
          // our report page is in a grid pattern so replicate that in the new canvas
          if (index % 2 === 1) {
            pdfctxX = 0;
            pdfctxY += canvasHeight + buffer;
          }
        });
        // create new pdf and add our new canvas as an image
        var pdf = new domPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
        pdf.addImage($("#myChart2")[0], 'PNG', 0, 0);
        
        // download the pdf
        pdf.save('filename.pdf');
      });
</script>
</html>