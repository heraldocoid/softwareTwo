<?php
	require_once('Clases.php');
	$ejercicio = $_POST['nombre_ejercicio'];
	$tipo_ejer = $_POST['tipo'];
	$consulta="insert into ejercicios(tipo,nombre_ejercicio) values ('".$tipo_ejer."','".$ejercicio."')";
	$respuesta = mysql_query($consulta, $conexion);

	header("Location: index.php");
?>