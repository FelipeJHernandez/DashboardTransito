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


function GraficaAccidentesAlcaldia(alcaldia,numeroAccidentes){
    console.log(alcaldia);
    var datos = {
        labels: alcaldia,
        datasets: [{
            data: numeroAccidentes,
            backgroundColor: ['#66ccff', '#ffccff'],
        }]
    };



    var ctx = document.getElementById("graficaAccidentesAlcaldia").getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos
    });
}

function HeatMapHorario(AccidentesMadrugadaLunes,AccidentesMananaLunes,AccidentesMediodiaLunes,AccidentesTardeLunes,AccidentesNocheLunes,AccidentesMuyNocheLunes,AccidentesMadrugadaMartes,AccidentesMananaMartes,AccidentesMediodiaMartes,AccidentesTardeMartes,AccidentesNocheMartes,AccidentesMuyNocheMartes,AccidentesMadrugadaMiercoles,AccidentesMananaMiercoles,AccidentesMediodiaMiercoles,AccidentesTardeMiercoles,AccidentesNocheMiercoles,AccidentesMuyNocheMiercoles,AccidentesMadrugadaJueves,AccidentesMananaJueves,AccidentesMediodiaJueves,AccidentesTardeJueves,AccidentesNocheJueves,AccidentesMuyNocheJueves,AccidentesMadrugadaViernes,AccidentesMananaViernes,AccidentesMediodiaViernes,AccidentesTardeViernes,AccidentesNocheViernes,AccidentesMuyNocheViernes,AccidentesMadrugadaSabado,AccidentesMananaSabado,AccidentesMediodiaSabado,AccidentesTardeSabado,AccidentesNocheSabado,AccidentesMuyNocheSabado,AccidentesMadrugadaDomingo,AccidentesMananaDomingo,AccidentesMediodiaDomingo,AccidentesTardeDomingo,AccidentesNocheDomingo,AccidentesMuyNocheDomingo){
    var datos=[{
        x:"Lunes",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaLunes
    },{
        x:"Lunes",
        y:"04:00-07:59",
        heat:AccidentesMananaLunes
    },{
        x:"Lunes",
        y:"08:00-11:59",
        heat:AccidentesMediodiaLunes
    },{
        x:"Lunes",
        y:"12:00-15:59",
        heat:AccidentesTardeLunes
    },{
        x:"Lunes",
        y:"16:00-19:59",
        heat:AccidentesNocheLunes
    },{
        x:"Lunes",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheLunes
    },{
        x:"Martes",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaMartes
    },{
        x:"Martes",
        y:"04:00-07:59",
        heat:AccidentesMananaMartes
    },{
        x:"Martes",
        y:"08:00-11:59",
        heat:AccidentesMediodiaMartes
    },{
        x:"Martes",
        y:"12:00-15:59",
        heat:AccidentesTardeMartes
    },{
        x:"Martes",
        y:"16:00-19:59",
        heat:AccidentesNocheMartes
    },{
        x:"Martes",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheMartes
    },{
        x:"Miércoles",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaMiercoles
    },{
        x:"Miércoles",
        y:"04:00-07:59",
        heat:AccidentesMananaMiercoles
    },{
        x:"Miércoles",
        y:"08:00-11:59",
        heat:AccidentesMediodiaMiercoles	
    },{
        x:"Miércoles",
        y:"12:00-15:59",
        heat:AccidentesTardeMiercoles
    },{
        x:"Miércoles",
        y:"16:00-19:59",
        heat:AccidentesNocheMiercoles
    },{
        x:"Miércoles",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheMiercoles
    },{
        x:"Jueves",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaJueves
    },{
        x:"Jueves",
        y:"04:00-07:59",
        heat:AccidentesMananaJueves
    },{
        x:"Jueves",
        y:"08:00-11:59",
        heat:AccidentesMediodiaJueves
    },{
        x:"Jueves",
        y:"12:00-15:59",
        heat:AccidentesTardeJueves
    },{
        x:"Jueves",
        y:"16:00-19:59",
        heat:AccidentesNocheJueves
    },{
        x:"Jueves",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheJueves
    },{
        x:"Viernes",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaViernes
    },{
        x:"Viernes",
        y:"04:00-07:59",
        heat:AccidentesMananaViernes
    },{
        x:"Viernes",
        y:"08:00-11:59",
        heat:AccidentesMediodiaViernes
    },{
        x:"Viernes",
        y:"12:00-15:59",
        heat:AccidentesTardeViernes
    },{
        x:"Viernes",
        y:"16:00-19:59",
        heat:AccidentesNocheViernes
    },{
        x:"Viernes",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheViernes
    },{
        x:"Sábado",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaSabado
    },{
        x:"Sábado",
        y:"04:00-07:59",
        heat:AccidentesMananaSabado
    },{
        x:"Sábado",
        y:"08:00-11:59",
        heat:AccidentesMediodiaSabado
    },{
        x:"Sábado",
        y:"12:00-15:59",
        heat:AccidentesTardeSabado
    },{
        x:"Sábado",
        y:"16:00-19:59",
        heat:AccidentesNocheSabado
    },{
        x:"Sábado",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheSabado
    },{
        x:"Domingo",
        y:"00:00-03.59",
        heat:AccidentesMadrugadaDomingo
    },{
        x:"Domingo",
        y:"04:00-07:59",
        heat:AccidentesMananaDomingo
    },{
        x:"Domingo",
        y:"08:00-11:59",
        heat:AccidentesMediodiaDomingo
    },{
        x:"Domingo",
        y:"12:00-15:59",
        heat:AccidentesTardeDomingo
    },{
        x:"Domingo",
        y:"16:00-19:59",
        heat:AccidentesNocheDomingo
    },{
        x:"Domingo",
        y:"20:00 - 23:59",
        heat:AccidentesMuyNocheDomingo
    },];
    let chart= anychart.heatMap(datos);
    chart.container("HeatmapHoras");
    chart.draw();
}  

function GraficaPastelVehiculos(Tipo_V,N_Evento){

    var datos = {
        labels: Tipo_V,
        datasets: [{
            data: N_Evento
        }]
    };

    var opciones = {
        responsive: false
    }

    var ctx = document.getElementById('tipoVehiculo').getContext('2d');
    var pastelChart = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: opciones
    });
}
function GraficaSemaforos(accidentesConSemaforo, accidentesSinSemaforo) {
    // Crear un elemento canvas para la gráfica
    var canvas = document.createElement('canvas');
    canvas.id = 'graficaSemaforos';
    document.body.appendChild(canvas);
  
    // Obtener el contexto del canvas
    var ctx = canvas.getContext('2d');
  
    // Configurar los datos de la gráfica
    var data = {
      labels: ['Accidentes con semáforo', 'Accidentes sin semáforo'],
      datasets: [{
        label: 'Comparación de accidentes',
        data: [accidentesConSemaforo, accidentesSinSemaforo],
        backgroundColor: ['blue', 'red']
      }]
    };
  
    // Configurar las opciones de la gráfica
    var options = {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };
  
    // Crear la gráfica de barras
    var chart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });
  }
// Llama a la función para crear la gráfica pasando los valores necesarios
crearGraficaPastelHM(numHombres, numMujeres);
crearGraficaEdad(rango0a10, rango10a20, rango20a40, rango40a60, rango60oMas);
crearGraficaPastelCondicion(cantidadOccisos, cantidadLesionados, cantidadnoHeridos);
crearGraficaPastelrolOcciso(cantidadPasajeros, cantidadConductores, cantidadPeatones, cantidadCiclista, cantidadMotociclista);
crearGraficaPastelrolLesionados(cantidadPasajerosLesionados, cantidadConductoresLesionados, cantidadPeatonesLesionados, cantidadCiclistaLesionados, cantidadMotociclistaLesionados);
crearGraficaTipodeAccidente(choques2018,atropellos2018,derrapes2018,caidasc2018,volcaduras2018,caidasp2018,choques2019,atropellos2019,derrapes2019,caidasc2019,volcaduras2019,caidasp2019,choques2020,atropellos2020,derrapes2020,caidasc2020,volcaduras2020,caidasp2020,choques2021,atropellos2021,derrapes2021,caidasc2021,volcaduras2021,caidasp2021,choques2022,atropellos2022,derrapes2022,caidasc2022,volcaduras2022,caidasp2022);
HeatMapHorario(AccidentesMadrugadaLunes,AccidentesMananaLunes,AccidentesMediodiaLunes,AccidentesTardeLunes,AccidentesNocheLunes,AccidentesMuyNocheLunes,AccidentesMadrugadaMartes,AccidentesMananaMartes,AccidentesMediodiaMartes,AccidentesTardeMartes,AccidentesNocheMartes,AccidentesMuyNocheMartes,AccidentesMadrugadaMiercoles,AccidentesMananaMiercoles,AccidentesMediodiaMiercoles,AccidentesTardeMiercoles,AccidentesNocheMiercoles,AccidentesMuyNocheMiercoles,AccidentesMadrugadaJueves,AccidentesMananaJueves,AccidentesMediodiaJueves,AccidentesTardeJueves,AccidentesNocheJueves,AccidentesMuyNocheJueves,AccidentesMadrugadaViernes,AccidentesMananaViernes,AccidentesMediodiaViernes,AccidentesTardeViernes,AccidentesNocheViernes,AccidentesMuyNocheViernes,AccidentesMadrugadaSabado,AccidentesMananaSabado,AccidentesMediodiaSabado,AccidentesTardeSabado,AccidentesNocheSabado,AccidentesMuyNocheSabado,AccidentesMadrugadaDomingo,AccidentesMananaDomingo,AccidentesMediodiaDomingo,AccidentesTardeDomingo,AccidentesNocheDomingo,AccidentesMuyNocheDomingo);
GraficaPastelVehiculos(Tipo_V,N_Evento);
GraficaAccidentesAlcaldia(alcaldia,numeroAccidentes);
GraficaSemaforos(accidentesConSemaforo, accidentesSinSemaforo);