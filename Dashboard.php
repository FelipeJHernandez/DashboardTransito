<?php
  $conn = mysqli_connect("localhost", "root", "R00T", "hechos_transito");
  if ($conn) {
      //genero
    	$query = "SELECT count(Genero) as totM from identidad where Genero = 'M'";
    	$resultado = $conn->query($query);

    	if (!$resultado) {
    		die("La consulta falló: " . $conn->error);
    	}
    	$totM = mysqli_fetch_assoc($resultado);
      $numHombres = $totM['totM'];

      $query = "SELECT count(Genero) as totF from identidad where Genero = 'F'";
    	$resultado = $conn->query($query);

    	if (!$resultado) {
    		die("La consulta falló: " . $conn->error);
    	}
    	$totF = mysqli_fetch_assoc($resultado);
      $numMujeres = $totF['totF'];
      //edad
      //edad 0 a 10
      $query = "SELECT count(Edad) as  Edad from identidad where Edad > 0 and Edad < 10";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $rango0a10 = $rango['Edad'];
      //edad 10 a 20
      $query = "SELECT count(Edad) as  Edad from identidad where Edad > 10 and Edad < 20";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $rango10a20 = $rango['Edad'];
      //edad 20 a 40
      $query = "SELECT count(Edad) as  Edad from identidad where Edad > 20 and Edad < 40";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $rango20a40 = $rango['Edad'];
      //edad 40 a 60
      $query = "SELECT count(Edad) as  Edad from identidad where Edad > 40 and Edad < 60";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $rango40a60 = $rango['Edad'];
      //edad 60 a mas
      $query = "SELECT count(Edad) as  Edad from identidad where Edad > 60";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $rango60oMas = $rango['Edad'];

      //Lesionados y occiso
      //occiso
      $query = "SELECT count(Condicion) as muerto from identidad where Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadOccisos = $rango['muerto'];

      //Lesionado
      $query = "SELECT count(Condicion) as lesionado from identidad where Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadLesionados = $rango['lesionado'];

      //sin heridos
      $query = "SELECT count(Condicion) as sin_herido from identidad where Condicion = 'SIN_HERIDOS'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadnoHeridos = $rango['sin_herido'];

      //roles de occisos
      //pasajeros
      $query = "SELECT count(Descripción) as pasajeros from identidad where Descripción = 'PASAJERO' and Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadPasajeros = $rango['pasajeros'];

      //conductor
      $query = "SELECT count(Descripción) as conductor from identidad where Descripción = 'CONDUCTOR' and Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadConductores = $rango['conductor'];

      //peaton
      $query = "SELECT count(Descripción) as peaton from identidad where Descripción = 'PEATON' and Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadPeatones = $rango['peaton'];

      //ciclista
      $query = "SELECT count(Descripción) as ciclista from identidad where Descripción = 'CICLISTA' and Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadCiclista = $rango['ciclista'];

      //motociclista
      $query = "SELECT count(Descripción) as motociclista from identidad where Descripción = 'MOTOCICLISTA' and Condicion = 'OCCISO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadMotociclista = $rango['motociclista'];


      //roles de lesionados
      //pasajeros
      $query = "SELECT count(Descripción) as pasajeros from identidad where Descripción = 'PASAJERO' and Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadPasajerosLesionados = $rango['pasajeros'];

      //conductor
      $query = "SELECT count(Descripción) as conductor from identidad where Descripción = 'CONDUCTOR' and Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadConductoresLesionados = $rango['conductor'];

      //peaton
      $query = "SELECT count(Descripción) as peaton from identidad where Descripción = 'PEATON' and Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadPeatonesLesionados = $rango['peaton'];

      //ciclista
      $query = "SELECT count(Descripción) as ciclista from identidad where Descripción = 'CICLISTA' and Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadCiclistaLesionados = $rango['ciclista'];

      //motociclista
      $query = "SELECT count(Descripción) as motociclista from identidad where Descripción = 'MOTOCICLISTA' and Condicion = 'LESIONADO'";
      $resultado = $conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $cantidadMotociclistaLesionados = $rango['motociclista'];
      /*
      Tipos de accidentes
        CHOQUE
        DERRAPADO
        ATROPELLADO
        CAIDA DE CICLISTA
        VOLCADURA
        CAIDA DE PASAJERO
      */
      //2018
      $query = "SELECT count(Tipo_evento) as choque from evento where Tipo_evento = 'CHOQUE' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $choques2018 = $rango['choque'];

      $query = "SELECT count(Tipo_evento) as derrape from evento where Tipo_evento = 'DERRAPADO' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $derrapes2018 = $rango['derrape'];

      $query = "SELECT count(Tipo_evento) as atropello from evento where Tipo_evento = 'ATROPELLADO' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $atropellos2018 = $rango['atropello'];

      $query = "SELECT count(Tipo_evento) as caidac from evento where Tipo_evento = 'CAIDA DE CICLISTA' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasc2018 = $rango['caidac'];

      $query = "SELECT count(Tipo_evento) as volcadura from evento where Tipo_evento = 'VOLCADURA' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $volcaduras2018 = $rango['volcadura'];

      $query = "SELECT count(Tipo_evento) as caidap from evento where Tipo_evento = 'CAIDA DE PASAJERO' and Fecha between '2018-01-01' and '2018-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasp2018 = $rango['caidap'];
      //2019
      $query = "SELECT count(Tipo_evento) as choque from evento where Tipo_evento = 'CHOQUE' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $choques2019 = $rango['choque'];

      $query = "SELECT count(Tipo_evento) as derrape from evento where Tipo_evento = 'DERRAPADO' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $derrapes2019 = $rango['derrape'];

      $query = "SELECT count(Tipo_evento) as atropello from evento where Tipo_evento = 'ATROPELLADO' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $atropellos2019 = $rango['atropello'];

      $query = "SELECT count(Tipo_evento) as caidac from evento where Tipo_evento = 'CAIDA DE CICLISTA' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasc2019 = $rango['caidac'];

      $query = "SELECT count(Tipo_evento) as volcadura from evento where Tipo_evento = 'VOLCADURA' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $volcaduras2019 = $rango['volcadura'];

      $query = "SELECT count(Tipo_evento) as caidap from evento where Tipo_evento = 'CAIDA DE PASAJERO' and Fecha between '2019-01-01' and '2019-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasp2019 = $rango['caidap'];
      //2020
      $query = "SELECT count(Tipo_evento) as choque from evento where Tipo_evento = 'CHOQUE' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $choques2020 = $rango['choque'];

      $query = "SELECT count(Tipo_evento) as derrape from evento where Tipo_evento = 'DERRAPADO' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $derrapes2020 = $rango['derrape'];

      $query = "SELECT count(Tipo_evento) as atropello from evento where Tipo_evento = 'ATROPELLADO' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $atropellos2020 = $rango['atropello'];

      $query = "SELECT count(Tipo_evento) as caidac from evento where Tipo_evento = 'CAIDA DE CICLISTA' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasc2020 = $rango['caidac'];

      $query = "SELECT count(Tipo_evento) as volcadura from evento where Tipo_evento = 'VOLCADURA' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $volcaduras2020 = $rango['volcadura'];

      $query = "SELECT count(Tipo_evento) as caidap from evento where Tipo_evento = 'CAIDA DE PASAJERO' and Fecha between '2020-01-01' and '2020-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasp2020 = $rango['caidap'];
      //2021
      $query = "SELECT count(Tipo_evento) as choque from evento where Tipo_evento = 'CHOQUE' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $choques2021 = $rango['choque'];

      $query = "SELECT count(Tipo_evento) as derrape from evento where Tipo_evento = 'DERRAPADO' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $derrapes2021 = $rango['derrape'];

      $query = "SELECT count(Tipo_evento) as atropello from evento where Tipo_evento = 'ATROPELLADO' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $atropellos2021 = $rango['atropello'];

      $query = "SELECT count(Tipo_evento) as caidac from evento where Tipo_evento = 'CAIDA DE CICLISTA' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasc2021 = $rango['caidac'];

      $query = "SELECT count(Tipo_evento) as volcadura from evento where Tipo_evento = 'VOLCADURA' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $volcaduras2021 = $rango['volcadura'];

      $query = "SELECT count(Tipo_evento) as caidap from evento where Tipo_evento = 'CAIDA DE PASAJERO' and Fecha between '2021-01-01' and '2021-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasp2021 = $rango['caidap'];
      //2022
      $query = "SELECT count(Tipo_evento) as choque from evento where Tipo_evento = 'CHOQUE' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $choques2022 = $rango['choque'];

      $query = "SELECT count(Tipo_evento) as derrape from evento where Tipo_evento = 'DERRAPADO' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $derrapes2022 = $rango['derrape'];

      $query = "SELECT count(Tipo_evento) as atropello from evento where Tipo_evento = 'ATROPELLADO' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $atropellos2022 = $rango['atropello'];

      $query = "SELECT count(Tipo_evento) as caidac from evento where Tipo_evento = 'CAIDA DE CICLISTA' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasc2022 = $rango['caidac'];

      $query = "SELECT count(Tipo_evento) as volcadura from evento where Tipo_evento = 'VOLCADURA' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $volcaduras2022 = $rango['volcadura'];

      $query = "SELECT count(Tipo_evento) as caidap from evento where Tipo_evento = 'CAIDA DE PASAJERO' and Fecha between '2022-01-01' and '2022-12-31'";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $caidasp2022 = $rango['caidap'];
      //Datos de horarios de accidentes
      //Lunes
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaLunes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaLunes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaLunes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeLunes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheLunes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='lunes' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheLunes = $rango['num_Accidentes'];
      //Martes
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaMartes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaMartes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaMartes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeMartes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheMartes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='martes' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheMartes = $rango['num_Accidentes'];
      //Miércoles
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaMiercoles = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaMiercoles = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaMiercoles = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeMiercoles = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheMiercoles = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='miércoles' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheMiercoles = $rango['num_Accidentes'];
      //Jueves
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaJueves = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaJueves = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaJueves = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeJueves = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheJueves = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='jueves' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheJueves = $rango['num_Accidentes'];
      //Viernes
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaViernes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaViernes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaViernes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeViernes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheViernes = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='viernes' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheViernes = $rango['num_Accidentes'];
      //Sábado
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sábado' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaSabado = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sabado' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaSabado = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sabado' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaSabado = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sábado' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeSabado = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sábado' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheSabado = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='sábado' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheSabado = $rango['num_Accidentes'];
      //Domingo
      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '00:00:00' and '03:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMadrugadaDomingo = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '04:00:00' and '07:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMananaDomingo = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '08:00:00' and '11:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMediodiaDomingo = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '12:00:00' and '15:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesTardeDomingo = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '16:00:00' and '19:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesNocheDomingo = $rango['num_Accidentes'];

      $query = "SELECT COUNT(Tipo_evento) as num_Accidentes from evento where evento.Día='domingo' and evento.Hora BETWEEN '20:00:00' and '23:59:59';";
      $resultado =$conn->query($query);
      if(!$resultado){
        die("La consulta falló: " . $conn->error);
      }
      $rango = mysqli_fetch_assoc($resultado);
      $AccidentesMuyNocheDomingo = $rango['num_Accidentes'];

      //Accidentes agrupados por tipo de vehículo
      $query = "SELECT Tipo_vehiculo as Tipo_V, COUNT(ID_Evento) as N_Evento FROM vehiculo GROUP BY Tipo_vehiculo;";
      $resultado = $conn->query($query);

      if (!$resultado) {  
          die("La consulta falló: " . $conn->error);
      }
      $pos=0;
      while($fila=mysqli_fetch_row($resultado)){
          $Tipo_V[$pos]=$fila[0];
          $N_Evento[$pos]=$fila[1];
          $pos++;
      }

  }
  else{
    die("La conexión falló: " . $conn->connect_error);
  }
  	mysqli_close($conn);
?>
