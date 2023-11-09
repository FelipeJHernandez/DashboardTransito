function crearGraficaPastelHM(numHombres, numMujeres) {
    var datos = {
        labels: ['Hombres', 'Mujeres'],
        datasets: [{
            data: [numHombres, numMujeres],
            backgroundColor: ['#66ccff', '#ffccff'],
        }]
    };

    var opciones = {
        responsive: true,
        maintainAspectRatio: false
    }

    var ctx = document.getElementById('graficaPastel').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}


// Llama a la función para crear la gráfica pasando los valores necesarios
crearGraficaPastelHM(numHombres, numMujeres);
