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

function crearGraficaTipodeAccidente(choques2018,atropellos2018,derrapes2018,caidasciclistas2018,volcaduras2018,caidaspasajeros2018,choques2019,atropellos2019,derrapes2019,caidasciclistas2019,volcaduras2019,caidaspasajeros2019,choques2020,atropellos2020,derrapes2020,caidasciclistas2020,volcaduras2020,caidaspasajeros2020,choques2021,atropellos2021,derrapes2021,caidasciclistas2021,volcaduras2021,caidaspasajeros2021,choques2022,atropellos2022,derrapes2022,caidasciclistas2022,volcaduras2022,caidaspasajeros2022){
    var datos = {
        labels: ['2018','2019','2020','2021','2022'],
        datasets: [{
            label:'CHOQUES',
            data: [choques2018,choques2019,choques2020,choques2021,choques2022],
            backgroundColor: 'red'
        },{
            label:'ATROPELLOS',
            data: [atropellos2018,atropellos2019,atropellos2020,atropellos2021,atropellos2022],
            backgroundColor: 'green'
        },
        {   label:'DERRAPES',
            data: [derrapes2018,derrapes2019,derrapes2020,derrapes2021,derrapes2022],
            backgroundColor: 'blue'
        },
        {
            label: 'CAIDAS DE CICLISTAS',
            data: [caidasciclistas2018,caidasciclistas2019,caidasciclistas2020,caidasciclistas2021,caidasciclistas2022],
            backgroundColor: 'yellow'
        },
        {   label:'VOLCADURAS',
            data: [volcaduras2018,volcaduras2019,volcaduras2020,volcaduras2021,volcaduras2022],
            backgroundColor: 'cyan'
        },
        {   label: 'CAIDAS DE PASAJEROS',
            data: [caidaspasajeros2018,caidaspasajeros2019,caidaspasajeros2020,caidaspasajeros2021,caidaspasajeros2022],
            backgroundColor: 'orange'
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('tipoAccidente').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'bar',
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
crearGraficaTipodeAccidente(choques2018,atropellos2018,derrapes2018,caidasc2018,volcaduras2018,caidasp2018,choques2019,atropellos2019,derrapes2019,caidasc2019,volcaduras2019,caidasp2019,choques2020,atropellos2020,derrapes2020,caidasc2020,volcaduras2020,caidasp2020,choques2021,atropellos2021,derrapes2021,caidasc2021,volcaduras2021,caidasp2021,choques2022,atropellos2022,derrapes2022,caidasc2022,volcaduras2022,caidasp2022);
