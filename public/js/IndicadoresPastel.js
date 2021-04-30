var ctx = document.getElementById('myChartIndicadores').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
        data: {
            labels: ['Red', 'Green', 'Yellow'],
            datasets: [{
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(220, 53, 69)',
                    'rgba(40, 167, 69)',//VERDE
                    'rgba(255, 193, 7)',
                ],
                borderColor: [
                    'rgba(220, 53, 69)',
                    'rgba(40, 167, 69)',//VERDE
                    'rgba(255, 193, 7)',
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