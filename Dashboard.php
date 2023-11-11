<?php
  $conn = mysqli_connect("localhost", "root", "R00t", "hechos_transito");
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


  }
  else{
    die("La conexión falló: " . $conn->connect_error);
  }
  	mysqli_close($conn);
?>
