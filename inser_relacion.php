<?php
	require_once('Clases.php');
	$fk_usuario = $_POST['fk_usuario'];
	$fk_ejercicio = $_POST['fk_ejercicio'];
	$repeticion = $_POST['repeticion'];
	$serie = $_POST['serie'];
	$insertar="insert into ejercicios_usuario (fk_usuario, fk_ejercicio, repeticion, serie) values ('".$fk_usuario."','".$fk_ejercicio."','".$repeticion."','".$serie."')";
	$respuesta = mysql_query($insertar, $conexion);
	header("Location: sistema.php");
?>

