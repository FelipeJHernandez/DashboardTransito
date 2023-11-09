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
  </script>
  <div class = "container">
    <div class = "row">
      <div class = "col-md-6">
        <div class = "GraficaHM">
          <h4>Gráfica</h4>
          <canvas id="graficaPastel"></canvas>
        </div>
      </div>
    </div>
  </div>
  <script src="Dashboard.js"></script>
</body>
</html>
