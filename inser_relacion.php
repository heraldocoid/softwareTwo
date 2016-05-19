<?php
	require_once('Clases.php');
	$fk_usuario = $_POST['fk_usuario'];
	$fk_ejercicio = $_POST['fk_ejercicio'];
	$tipo_ejercicio = $_POST['fk_ejercicio_tipo'];
	$repeticion = $_POST['repeticion'];
	$serie = $_POST['serie'];

	$consulta_ejercicio = "Select *from ejercicios_usuario where fk_usuario='".$fk_usuario."' and fk_ejercicio = '".$fk_ejercicio."' and fk_ejercicio_tipo='".$tipo_ejercicio."'";
	$qry_ejercicio = mysql_num_rows(mysql_query($consulta_ejercicio,$conexion));
	if($qry_ejercicio > 0){
		header("Location: error.php");
	}else{
		$insertar="insert into ejercicios_usuario (fk_usuario,fk_ejercicio,fk_ejercicio_tipo,repeticion,serie) values ('".$fk_usuario."','".$fk_ejercicio."','".$tipo_ejercicio."','".$repeticion."','".$serie."')";
		$respuesta = mysql_query($insertar, $conexion);

		header("Location: guardado.php");
	}

	
?>

