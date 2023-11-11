function crearGraficaPastelHM(numHombres, numMujeres) {
    var datos = {
        labels: ['Hombres', 'Mujeres'],
        datasets: [{
            data: [numHombres, numMujeres],
            backgroundColor: ['#66ccff', '#ffccff'],
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('graficaPastel').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}

function crearGraficaEdad(rango0a10, rango10a20, rango20a40, rango40a60, rango60oMas) {
    var datos = {
        label: "Rangos de edad",
        data: [rango0a10, rango10a20, rango20a40, rango40a60, rango60oMas]
    };


    var ctx = document.getElementById('graficaEdad').getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels:['0-10', '10-20', '20-40', '40-60', '60+'],
          datasets: [datos]
        }
    });
}

function crearGraficaPastelCondicion(cantidadOccisos, cantidadLesionados, cantidadnoHeridos) {
    var datos = {
        labels: ['Lesionados', 'Occisos', 'Sin heridas'],
        datasets: [{
            data: [cantidadLesionados, cantidadOccisos, cantidadnoHeridos],
            backgroundColor: ['crimson', 'purple', 'white'],
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('graficaCondicion').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}

function crearGraficaPastelrolOcciso(cantidadPasajeros, cantidadConductores, cantidadPeatones, cantidadCiclista, cantidadMotociclista) {
    var datos = {
        labels: ['Pasajeros', 'Conductores', 'Peatones', 'Ciclistas', 'Motociclistas'],
        datasets: [{
            data: [cantidadPasajeros, cantidadConductores, cantidadPeatones, cantidadCiclista, cantidadMotociclista],
            backgroundColor: ['sky', 'blue', 'yellow', 'cyan', 'orange'],
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('tipoOccisos').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}

function crearGraficaPastelrolLesionados(cantidadPasajerosLesionados, cantidadConductoresLesionados, cantidadPeatonesLesionados, cantidadCiclistaLesionados, cantidadMotociclistaLesionados) {
    var datos = {
        labels: ['Pasajeros', 'Conductores', 'Peatones', 'Ciclistas', 'Motociclistas'],
        datasets: [{
            data: [cantidadPasajerosLesionados, cantidadConductoresLesionados, cantidadPeatonesLesionados, cantidadCiclistaLesionados, cantidadMotociclistaLesionados],
            backgroundColor: ['sky', 'blue', 'yellow', 'cyan', 'orange'],
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('tipoLesionados').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}

// Llama a la función para crear la gráfica pasando los valores necesarios
crearGraficaPastelHM(numHombres, numMujeres);
crearGraficaEdad(rango0a10, rango10a20, rango20a40, rango40a60, rango60oMas);
crearGraficaPastelCondicion(cantidadOccisos, cantidadLesionados, cantidadnoHeridos);
crearGraficaPastelrolOcciso(cantidadPasajeros, cantidadConductores, cantidadPeatones, cantidadCiclista, cantidadMotociclista);
crearGraficaPastelrolLesionados(cantidadPasajerosLesionados, cantidadConductoresLesionados, cantidadPeatonesLesionados, cantidadCiclistaLesionados, cantidadMotociclistaLesionados);
