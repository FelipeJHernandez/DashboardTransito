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

    var choques2018 = <?php echo $choques2018; ?>;
    var derrapes2018 = <?php echo $derrapes2018;?>;
    var atropellos2018 = <?php echo $atropellos2018;?>;
    var caidasc2018 = <?php echo $caidasc2018;?>;
    var volcaduras2018 = <?php echo $volcaduras2018;?>;
    var caidasp2018 = <?php  echo $caidasp2018; ?>;

    var choques2019 = <?php echo $choques2019; ?>;
    var derrapes2019 = <?php echo $derrapes2019;?>;
    var atropellos2019=<?php echo $atropellos2019;?>;
    var caidasc2019=<?php echo $caidasc2019;?>;
    var volcaduras2019=<?php echo $volcaduras2019;?>;
    var caidasp2019=<?php echo $caidasp2019; ?>;

    var choques2020 = <?php echo $choques2020; ?>;
    var derrapes2020 = <?php echo $derrapes2020;?>;
    var atropellos2020=<?php echo $atropellos2020;?>;
    var caidasc2020=<?php echo $caidasc2020;?>;
    var volcaduras2020=<?php echo $volcaduras2020;?>;
    var caidasp2020=<?php echo $caidasp2020; ?>;

    var choques2021 = <?php echo $choques2021; ?>;
    var derrapes2021 = <?php echo $derrapes2021;?>;
    var atropellos2021=<?php echo $atropellos2021;?>;
    var caidasc2021=<?php echo $caidasc2021;?>;
    var volcaduras2021=<?php echo $volcaduras2021;?>;
    var caidasp2021=<?php echo $caidasp2021; ?>;

    var choques2022 = <?php echo $choques2022; ?>;
    var derrapes2022 = <?php echo $derrapes2022;?>;
    var atropellos2022=<?php echo $atropellos2022;?>;
    var caidasc2022=<?php echo $caidasc2022;?>;
    var volcaduras2022=<?php echo $volcaduras2022;?>;
    var caidasp2022=<?php echo $caidasp2022; ?>;

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
      <h2>Datos de los accidentes</h2>
      <div class="graficaMuestra">
        <h4>Accidentes más frecuentes por año</h4>
        <p style = "color: white;">Cantidad de accidentes más frecuentes en cada año</p>
        <canvas id="tipoAccidente" width="1200" height="400"></canvas>
      </div>
    </div>
    <div>
      <h2>Datos de los lugares</h2>
    </div>
  </div>
  <script src="Dashboard.js"></script>
</body>
</html>
