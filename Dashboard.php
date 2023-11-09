<?php
  $conn = mysqli_connect("localhost", "root", "R00t", "hechos_transito");
  if ($conn) {
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
  }
  else{
    die("La conexión falló: " . $conn->connect_error);
  }
  	mysqli_close($conn);
?>
