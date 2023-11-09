function crearGraficaPastelHM(numHombres, numMujeres) {
    var datos = {
        labels: ['Hombres', 'Mujeres'],
        datasets: [{
            data: [numHombres, numMujeres],
            backgroundColor: ['#FF5733', '#3366FF'],
        }]
    };

    var opciones = {
        responsive: true,
        maintainAspectRatio: false,
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue) {
                        return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                    return data.labels[tooltipItem.index] + ': ' + percentage + '%';
                }
            }
        },
        plugins: {
            datalabels: {
                color: '#fff',
                formatter: (value, ctx) => {
                    let sum = ctx.dataset._meta[0].total;
                    let percentage = (value * 100 / sum).toFixed(2) + "%";
                    return percentage;
                }
            }
        }
    };

    var ctx = document.getElementById('graficaPastel').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}


// Llama a la función para crear la gráfica pasando los valores necesarios
crearGraficaPastelHM(numHombres, numMujeres);
