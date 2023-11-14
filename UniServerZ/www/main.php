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
                                
                                Backend Python
                                <ul>

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
                        <span class="count_top"><i class="fa fa-asterisk"></i> Accidentes </span>
                        <div class="count" id="d_vtot"></div>
                        <span class="count_bottom"><i class="fa-solid fa-asterisk fa-xs" style="color: #818a9c;"></i>Por Tipos</span>
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-globe"><i class="fa-light fa-user fa-sm" style="color: #5f7191;"></i></i>Edades</span>
                        <!--<div class="count" id="d_vtopa"></div>
                        <span class="count_bottom" id="d_vtopp"></span> -->
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-genderless fa-sm" style="color: #738096;"></i> G&eacute;nero</span>
                        <!--<div class="count" id="d_ticket"></div>
                        <span class="count_bottom"></span>-->
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-notes-medical fa-sm" style="color: #6f86ae;"></i>Status de involucrados</span>
                        <!---<div class="count" id="d_vtopca"></div>
                        <span class="count_bottom" id="d_vtopcn"></span>-->
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-light fa-skull fa-sm" style="color: #344156;"></i> Occisos</span>
                       <!-- <div id="d_film"></div>
                        <span class="count_bottom" id="d_filmcat"></span>-->
                    </div>
                    
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa-solid fa-crutch fa-sm" style="color: #66758f;"></i> Lesionados</span>
                       <!-- <div class="count" id="d_topca"></div>
                        <span class="count_bottom" id="d_topcd"></span>-->
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><<i class="fa-light fa-tag fa-sm" style="color: #5b6576;"></i> Más frecuentes</span>
                       <div class="count" id="d_topca"></div>
                        <span class="count_bottom" id="d_topcd">Por año</span>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"> Lugares</span>
                       <div class="count" id="d_topca"></div>
                        <span class="count_bottom" id="d_topcd"><i class="fa-light fa-location-dot fa-sm"></i>Por zona </span>
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
                            <div class="x_content">
                                <div id="d_vmes" style="height:285px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="x_panel">
                            <div class="x_content">
                                <h4>Tipo de accidentes</h4>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-md-12 text-center">
                                        <select id="s_mes" class="select2_group form-control">
                                            <option selected="true" value="5">Choques</option>
                                            <option value="6">Atropellos</option>
                                            <option value="7">Derrapes</option>
                                            <option value="8">Ca&iacute;das de ciclistas</option>
                                            <option value="8">Volcaduras</option>
                                            <option value="8">Ca&iacute;das de pasajeros</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="d_vmespais" style="height:270px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por G&eacute;nero</h4></a>
                            </div>
                            <div class="x_content">
                                <div id="d_vpais" style="height:360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Accidentes por Edades</h4></a>
                            </div>
                            <div class="x_content">
                                <div id="d_vmes" style="height:285px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="x_panel">
                            <div class="x_content">
                                <h4>Rango de edades</h4>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-md-12 text-center">
                                        <select id="s_mes" class="select2_group form-control">
                                            <option selected="true" value="5">0 a 10</option>
                                            <option value="6">10 a 20</option>
                                            <option value="7">20 a 40</option>
                                            <option value="8">40  a 60</option>
                                            <option value="9">60 a m&aacute;s</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="d_vmespais" style="height:270px;"></div>
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
                            <div class="x_content">
                                <div id="d_vmes" style="height:285px;"></div>
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
                            <div class="x_content">
                                <div id="d_vmes" style="height:285px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="x_panel">
                            <div class="x_content">
                                <h4>Según su rol</h4>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-md-12 text-center">
                                        <select id="s_mes" class="select2_group form-control">
                                            <option selected="true" value="5">Pasajeros</option>
                                            <option value="6">Conductores</option>
                                            <option value="7">Peatones</option>
                                            <option value="8">Ciclistas</option>
                                            <option value="8">Motociclistas</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="d_vmespais" style="height:270px;"></div>
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
                            <div class="x_content">
                                <div id="d_vmes" style="height:285px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="x_panel">
                            <div class="x_content">
                                <h4>Según su rol</h4>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-md-12 text-center">
                                        <select id="s_mes" class="select2_group form-control">
                                            <option selected="true" value="5">Pasajeros</option>
                                            <option value="6">Conductores</option>
                                            <option value="7">Peatones</option>
                                            <option value="8">Ciclistas</option>
                                            <option value="8">Motociclistas</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="d_vmespais" style="height:270px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel" style="height:650px;">
                            <div class="x_title">
                                <a><h4>Accidentes por lugares</h4></a>
                            </div>
                            <div class="x_content text-center">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" id="t_hm" title="Para facilitar observar la frecuencia en alcaldías">Mapa de calor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" id="t_barras">Barras</a>
                                    </li>
                                </ul>
                                
                                <div id="d_hm" style="display:block;height:450px;">
                                    <div id="d_hmcats" style="height:100%"></div>
                                </div>
                                
                                <div id="d_barras" style="display:none;height:450px;">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">&nbsp;</div>
                                        <div class="col-md-1 legendBox lBMay">Choque</div>
                                        <div class="col-md-1 legendBox lBJun">Atropellos</div>
                                        <div class="col-md-1 legendBox lBJul">Derrapes</div>
                                        <div class="col-md-1 legendBox lBAug">Caídas de ciclistas</div>
                                        <div class="col-md-1 legendBox lBAug">Volcaduras</div>
                                        <div class="col-md-1 legendBox lBAug">Caídas de pasajeros</div>
                                        <div class="col-md-4">&nbsp;</div>
                                    </div>
                                    <br>
                                    <canvas id="d_cats"></canvas>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <a><h4>Desempe&ntilde;o de filmes</h4></a>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 text-center" style="background-color:#DCEDE9;height:350px;">
                                            <h3>Mejores pel&iacute;culas</h3>
                                            <small>Con rentas sin importar el <i>raiting</i></small>
                                            <hr>
                                            <div id="d_topfilms"></div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 text-center" style="background-color:#F1D3C0;height:350px;">
                                            <h3>Peores pel&iacute;culas</h3>
                                            <small>Sin rentas y bajo <i>raiting</i></small>
                                            <hr>
                                            <div id="d_badfilms"></div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                
            </div>
            <!-- /page content -->

            
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Hecho por: <b></b>
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
