var ctx = document.getElementById('IndicadorDirector').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
        data: {
            labels: ['Green'],
            datasets: [{
                data: [69.4, 30.6,],//Aquí es donde los datos van a crecer
                backgroundColor: [
                    'rgba(40, 167, 69)',//VERDE
                    'rgba(255, 255, 255)',
                ],
                borderColor: [
                    'rgba(40, 167, 69)',//VERDE
                    'rgba(255, 255, 255)',
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