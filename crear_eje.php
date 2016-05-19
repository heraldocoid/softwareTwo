<?php
	require_once('Clases.php');
	$ejercicio = $_POST['nombre_ejercicio'];
	$tipo_ejer = $_POST['tipo'];

	$select_ejercicio = "Select * from ejercicios where tipo='".$tipo_ejer."' and nombre_ejercicio='".$ejercicio."'";
	$qry_ejercicio = mysql_num_rows(mysql_query($select_ejercicio,$conexion));
	if($qry_ejercicio > 0){
		header("Location: error.php");
	}else{
		$consulta="insert into ejercicios(tipo,nombre_ejercicio) values ('".$tipo_ejer."','".$ejercicio."')";
		$respuesta = mysql_query($consulta, $conexion);
		echo $select_ejercicio;
		header("Location: guardado.php");
	}


	
?>