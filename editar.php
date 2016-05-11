<?php
	require_once("Clases.php");
	$sql_editar = "update usuarios set 
		primerNombre = '".$_POST['primerNombre']."',
		segundoNombre = '".$_POST['segundoNombre']."',
		primerApellido = '".$_POST['primerApellido']."',
		segundoApellido = '".$_POST['segundoApellido']."',
		edad = '".$_POST['edad']."',
		genero = '".$_POST['genero']."',
		altura = '".$_POST['altura']."',
		peso = '".$_POST['peso']."',
		objetivo = '".$_POST['objetivo']."',
		horas = '".$_POST['horas']."',
		observaciones = '".$_POST['observaciones']."' where cedula='".$_POST['cedula']."'";
	$qry_editar = mysql_query($sql_editar,$conexion);

	header('Location: sistema.php');
?>