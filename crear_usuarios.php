<?php
require_once("Clases.php");
$imc = $_POST['peso']/pow($_POST['altura'], 2);

$consulta_usuarios = "select * from usuarios where cedula = '".$_POST['cedula']."'";
$qry_consulta_usuarios = mysql_num_rows(mysql_query($consulta_usuarios,$conexion));
if($qry_consulta_usuarios > 0){
	echo 'El usuario ya se encuentra creado';
}else{
	$crear_usuario = "insert into usuarios (cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,edad,genero,altura,peso,objetivo,horas,imc,observaciones) VALUES ('".$_POST['cedula']."','".$_POST['primerNombre']."','".$_POST['segundoNombre']."','".$_POST['primerNombre']."','".$_POST['segundoApellido']."','".$_POST['edad']."','".$_POST['genero']."','".$_POST['altura']."','".$_POST['peso']."','".$_POST['objetivo']."','".$_POST['horas']."','".$imc."','".$_POST['observaciones']."')";
	$qrery_usuario = mysql_query($crear_usuario,$conexion);
	echo '<p>Guardado satisfactorio</p>';
	Sleep(10);
	header('Location:sistema.php');
}

?>
