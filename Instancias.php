<?php

/*require_once("Clases.php");
//$imc = $_POST['peso']/pow($_POST['altura'], 2);
//$nuevo = new Nuevo_registro();
//$nuevo->insertar($_POST['cedula'], $_POST['primerNombre'], $_POST['segundoNombre'], $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['edad'], $_POST['genero'],$_POST['altura'],$_POST['peso'],$imc,$_POST['observaciones']);

$cedula = $_POST['cedula']; 
$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre']; 
$primerApellido = $_POST['primerApellido']; 
$segundoApellido = $_POST['segundoApellido']; 
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = $_POST['peso']/pow($_POST['altura'], 2);
$observaciones = $_POST['observaciones'];

$insertar_usuario ="insert into usuarios (cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,edad,genero,altura,peso,imc,observaciones) values ('".$cedula."','".$primerNombre."','".$segundoNombre."','".$primerApellido."','".$segundoApellido."','".$edad."','".$genero."','".$altura."','".$peso."','".$imc."','".$observaciones."')";
$sentencia_usuarios = mysql_query($insertar_usuario,$conexion);

header("Location: formulario_consulta.php"); 
*/?>


<?php
	require_once('Clases.php');
	$imc = $_POST['pe']/pow($_POST['al'], 2);

	//$query_insertar = sprintf("INSERT INTO usuarios (cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,edad,genero,altura,peso,observaciones) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
	$query_insertar = sprintf("INSERT INTO usuarios (cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,edad,genero,altura,peso,objetivo,horas,imc,observaciones) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",

	GetSQLValueString($_POST['ced'], "text"),
	GetSQLValueString($_POST['pn'], "text"),
	GetSQLValueString($_POST['sn'], "text"),
	GetSQLValueString($_POST['pa'], "text"),
	GetSQLValueString($_POST['sa'], "text"),
	GetSQLValueString($_POST['ed'], "text"),
	GetSQLValueString($_POST['gen'], "text"),
	GetSQLValueString($_POST['al'], "text"),
	GetSQLValueString($_POST['pe'], "text"),
	GetSQLValueString($_POST['obj'], "text"),
	GetSQLValueString($_POST['horas'], "text"),
	GetSQLValueString($imc, "text"),
	GetSQLValueString($_POST['ob'], "text"));
	

	mysql_select_db($database, $conexion);
	$datos_insertar = mysql_query($query_insertar, $conexion) or die (mysql_error());
?>
