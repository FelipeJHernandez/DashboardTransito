<html>
<head>
  <link href="Dashboard.css" rel = "stylesheet" type = "text/css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@latest"></script>
</head>
<body>
  <h1>Dashboard</h1>
  <?php include ('Dashboard.php'); ?>
  <script>
    var numHombres = <?php echo $numHombres; ?>;
    var numMujeres = <?php echo $numMujeres; ?>;

    var rango0a10 = <?php echo $rango0a10; ?>;
    var rango10a20 = <?php echo $rango10a20; ?>;
    var rango20a40 = <?php echo $rango20a40; ?>;
    var rango40a60 = <?php echo $rango40a60; ?>;
    var rango60oMas = <?php echo $rango60oMas; ?>;

    var cantidadOccisos = <?php echo $cantidadOccisos; ?>;
    var cantidadLesionados = <?php echo $cantidadLesionados; ?>;
    var cantidadnoHeridos = <?php echo $cantidadnoHeridos; ?>;

    var cantidadPasajeros = <?php echo $cantidadPasajeros; ?>;
    var cantidadConductores = <?php echo $cantidadConductores; ?>;
    var cantidadPeatones = <?php echo $cantidadPeatones; ?>;
    var cantidadCiclista = <?php echo $cantidadCiclista; ?>;
    var cantidadMotociclista = <?php echo $cantidadMotociclista; ?>;

    var cantidadPasajerosLesionados = <?php echo $cantidadPasajerosLesionados; ?>;
    var cantidadConductoresLesionados = <?php echo $cantidadConductoresLesionados; ?>;
    var cantidadPeatonesLesionados = <?php echo $cantidadPeatonesLesionados; ?>;
    var cantidadCiclistaLesionados = <?php echo $cantidadCiclistaLesionados; ?>;
    var cantidadMotociclistaLesionados = <?php echo $cantidadMotociclistaLesionados; ?>;
  </script>
  <div>
    <h3>Datos pasajeros</h3>
    <div>
      <div class = "graficaMuestra">
        <h4>Hombres/Mujeres</h4>
        <p style = "color: white;">Porcentaje de hombres y mujeres involucrados en accidentes de tránsito</p>
        <canvas id="graficaPastel" width="400" height="400"></canvas>
      </div>
      <div class = "graficaMuestra">
        <h4>Edades</h4>
        <p style = "color: white;">Porcentaje de incolucrados en cada rango de edad</p>
        <canvas id="graficaEdad" width="400" height="400"></canvas>
      </div>

      <div class = "graficaMuestra">
        <h4>Porcentaje de gente herida/muerta</h4>
        <p style = "color: white;">Porcentaje de incolucrados muertos y lesionados</p>
        <canvas id="graficaCondicion" width="400" height="400"></canvas>
      </div>

      <div class = "graficaMuestra">
        <h4>Porcentaje de involucrados entre los occisos</h4>
        <p style = "color: white;">Porcentaje de personas que han resultado muertas segun su rol dentro del accidente automovilistico </p>
        <canvas id="tipoOccisos" width="400" height="400"></canvas>
      </div>

      <div class = "graficaMuestra">
        <h4>Porcentaje de involucrados entre los lesionados</h4>
        <p style = "color: white;">Porcentaje de personas que han resultado lesionados segun su rol dentro del accidente automovilistico </p>
        <canvas id="tipoLesionados" width="400" height="400"></canvas>
      </div>

    </div>
    <div>
      <h2>Datos de los choques</h2>
    </div>
    <div>
      <h2>Datos de los vehiculos</h2>
    </div>
  </div>
  <script src="Dashboard.js"></script>
</body>
</html>
