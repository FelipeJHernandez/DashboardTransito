<html>
<head>
  <!--<link href="Dashboard.css" rel = "stylesheet" type = "text/css">-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@latest"></script>
  <link href="./Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
  <link href="./css/custom.css" rel="stylesheet">
  <link href="./css/style.css"  rel="stylesheet">
  <script src="https://kit.fontawesome.com/c868c28022.js" crossorigin="anonymous"></script>
  <title>Dashboard Transito</title>
</head>
<body class= "nav-md">

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

    
    var AccidentesMadrugadaLunes=<?php echo $AccidentesMadrugadaLunes;?>;
    var AccidentesMananaLunes=<?php echo $AccidentesMananaLunes;?>;
    var AccidentesMediodiaLunes=<?php echo $AccidentesMediodiaLunes;?>;
    var AccidentesTardeLunes=<?php echo $AccidentesTardeLunes;?>;
    var AccidentesNocheLunes=<?php echo $AccidentesNocheLunes;?>;
    var AccidentesMuyNocheLunes=<?php echo $AccidentesMuyNocheLunes;?>;

    var AccidentesMadrugadaMartes=<?php echo $AccidentesMadrugadaMartes;?>;
    var AccidentesMananaMartes=<?php echo $AccidentesMananaMartes;?>;
    var AccidentesMediodiaMartes=<?php echo $AccidentesMediodiaMartes;?>;
    var AccidentesTardeMartes=<?php echo $AccidentesTardeMartes;?>;
    var AccidentesNocheMartes=<?php echo $AccidentesNocheMartes;?>;
    var AccidentesMuyNocheMartes=<?php echo $AccidentesMuyNocheMartes;?>;

    var AccidentesMadrugadaMiercoles=<?php echo $AccidentesMadrugadaMiercoles;?>;
    var AccidentesMananaMiercoles=<?php echo $AccidentesMananaMiercoles;?>;
    var AccidentesMediodiaMiercoles=<?php echo $AccidentesMediodiaMiercoles;?>;
    var AccidentesTardeMiercoles=<?php echo $AccidentesTardeMiercoles;?>;
    var AccidentesNocheMiercoles=<?php echo $AccidentesNocheMiercoles;?>;
    var AccidentesMuyNocheMiercoles=<?php echo $AccidentesMuyNocheMiercoles;?>;

    var AccidentesMadrugadaJueves=<?php echo $AccidentesMadrugadaJueves;?>;
    var AccidentesMananaJueves=<?php echo $AccidentesMananaJueves;?>;
    var AccidentesMediodiaJueves=<?php echo $AccidentesMediodiaJueves;?>;
    var AccidentesTardeJueves=<?php echo $AccidentesTardeJueves;?>;
    var AccidentesNocheJueves=<?php echo $AccidentesNocheJueves;?>;
    var AccidentesMuyNocheJueves=<?php echo $AccidentesMuyNocheJueves;?>;

    var AccidentesMadrugadaViernes=<?php echo $AccidentesMadrugadaViernes;?>;
    var AccidentesMananaViernes=<?php echo $AccidentesMananaViernes;?>;
    var AccidentesMediodiaViernes=<?php echo $AccidentesMediodiaViernes;?>;
    var AccidentesTardeViernes=<?php echo $AccidentesTardeViernes;?>;
    var AccidentesNocheViernes=<?php echo $AccidentesNocheViernes;?>;
    var AccidentesMuyNocheViernes=<?php echo $AccidentesMuyNocheViernes;?>;

    var AccidentesMadrugadaSabado=<?php echo $AccidentesMadrugadaSabado;?>;
    var AccidentesMananaSabado=<?php echo $AccidentesMananaSabado;?>;
    var AccidentesMediodiaSabado=<?php echo $AccidentesMediodiaSabado;?>;
    var AccidentesTardeSabado=<?php echo $AccidentesTardeSabado;?>;
    var AccidentesNocheSabado=<?php echo $AccidentesNocheSabado;?>;
    var AccidentesMuyNocheSabado=<?php echo $AccidentesMuyNocheSabado;?>;

    var AccidentesMadrugadaDomingo=<?php echo $AccidentesMadrugadaDomingo;?>;
    var AccidentesMananaDomingo=<?php echo $AccidentesMananaDomingo;?>;
    var AccidentesMediodiaDomingo=<?php echo $AccidentesMediodiaDomingo;?>;
    var AccidentesTardeDomingo=<?php echo $AccidentesTardeDomingo;?>;
    var AccidentesNocheDomingo=<?php echo $AccidentesNocheDomingo;?>;
    var AccidentesMuyNocheDomingo=<?php echo $AccidentesMuyNocheDomingo;?>;
    
    var alcaldias =<?php echo json_encode($alcaldias);?>;
    var numeroAccidentes = <?php echo json_encode($numeroAccidentes);?>;

    var Tipo_V = <?php echo json_encode($Tipo_V); ?>;
    var N_Evento = <?php echo json_encode($N_Evento); ?>;

    var accidentesConSemaforo= <?php echo json_encode($accidentesConSemaforo);?>;
    var accidentesSinSemaforo= <?php echo json_encode($accidentesSinSemaforo);?>;
  </script>

<div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col">
                    <div class="navbar">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="assets/up.png" />
                            </div>
                        </div>
                    
                        <br>
                        <h2>Facultad de Ingenier&iacute;a</h2>
                        <br>
                        <h2><b>Bases de Datos Avanzadas</b></h2>
                        <br>
                        <div class="clearfix"></div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <b>Tecnolog&iacute;a usada:</b>
                                <br>
                                <br>
                                
                                Datos
                                <ul>
                                    <li>MySQL Hechos Transito</li>
                                </ul>
                                <br>
                                
                                Backend PHP
                                <ul>
                                    <li>PHP</li>

                                </ul>
                                <br>
                                
                                
                                Plantilla
                                <ul>
                                    <li>Gentelella Dashboard Template</li>
                                </ul>
                                <br>
                                
                                Arquitectura
                                <ul>
                                    <li>Bootstrap</li>
                                    <li>Bootstrap-progressbar</li>
                                    <li>Fontawesome</li>

                                </ul>
                                <br>
                                
                                Graficadores
                                <ul>
                                <li>Chart.js</li>
                                <li>Anychart</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            

            <!-- page content -->
            <div class="right_col" role="main">

                <h1 class="green">Accidentes vehiculares CDMX 2018-2022</h1>
                
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-asterisk fa-xs" style="color: #818a9c;"></i> Accidentes </span>
                        <div class="count" id="d_vtot"></div>
                        <span class="count_bottom">Por Tipos</span>
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                     <span class="count_top"><i class="fa-regular fa-hand"></i> Edades </span>
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-genderless fa-sm" style="color: #738096;"></i> G&eacute;nero</span>

                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-notes-medical fa-sm" style="color: #6f86ae;"></i>Status de involucrados</span>

                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-skull" style="color: #596a88;"></i> Occisos</span>
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-crutch fa-sm" style="color: #66758f;"></i> Lesionados</span>
 
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-car-rear" style="color: #546178;"></i>Vehiculos</span>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-map-location" style="color: #525d6f;"></i>Lugares</span>
                        <div class="count" id="d_topca"></div>
                        <span class="count_bottom" id="d_topcd"></i>Por alcaldías </span>
                    </div>
                    <div class="col-md-3 col-sm-4 tile_stats_count text-wrap">
                        <span class="count_top"> <i class="fa-solid fa-traffic-light" style="color: #435065;"></i>Semaforo/Intersecciones</span>
                    </div>
                </div>
                <!-- /top tiles -->
                
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes</h4></a>
                            </div>
                            <h4>Tipo de accidentes</h4>

                                <div class="graficaMuestra">
                                <canvas id="tipoAccidente" ></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-8 mx-auto">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por G&eacute;nero</h4></a>
                            </div>
                            <div class = "graficaMuestra1">
                                <canvas id="graficaPastel"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por Edades</h4></a>
                            </div>
                            <div class = "graficaMuestra1">
                                <canvas id="graficaEdad" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Status de los involucrados</h4></a>
                            </div>
                            <div class = "graficaMuestra">
                            <canvas id="graficaCondicion" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Occisos</h4></a>
                            </div>
                            <div class = "graficaMuestra">
                                <canvas id="tipoOccisos" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Lesionados</h4></a>
                            </div>
                            <div class = "graficaMuestra">
                                <canvas id="tipoLesionados" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por alcaldias</h4></a>
                            </div>
                            <div class = "graficaMuestra">
                              <canvas id="graficaAccidentesAlcaldia" width="400" height="400"></canvas> 
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Vehiculos</h4></a>
                            </div>
                            <div class = "graficaMuestra">
                              <canvas id="tipoVehiculo" width="400" height="400"></canvas> 
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes con respecto a los semáforos  </h4></a>
                            </div>
                            <div class = "graficaMuestra">
                              <canvas id="graficaSemaforos" width="400" height="400"></canvas> 
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por hora y días </h4></a>
                            </div>
                            <div class = "HeatmapHoras">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /page content -->
          
            
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                 Hecho por:
                    <ul>
                        <li>Mauricio Gonzáles Castelazo</li>
                        <li>Felipe de Jesús Hernández Perez</li>
                        <li>Dania Barbara Venegas Bofill</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
            
        </div>
    </div>
    
    <br><br>


	<script src="./Bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="./bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="Dashboard.js"></script>
</body>
</html>