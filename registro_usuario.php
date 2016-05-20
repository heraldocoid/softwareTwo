<?php
	require_once("Clases.php");
	$identificacion = $_POST['identificacion'];
	$usuario = $_POST['usuario'];
	$contrasena = md5($_POST['contrasena']);
	$tipo_usuario = $_POST['tipo_usuario'];

	$select_usuarios = "select *from accesos where identificacion='".$identificacion."'";
	$qry_consultar_usuarios = mysql_num_rows(mysql_query($select_usuarios,$conexion));
	if($qry_consultar_usuarios > 0){
		header("Location: error.php");
	}else{
		$Insertar_usuarios = "insert into accesos (identificacion,usuario,contrasena,tipo_usuario) values ('".$identificacion."','".$usuario."','".$contrasena."','".$tipo_usuario."')";
		$qry_insertar_usuarios = mysql_query($Insertar_usuarios,$conexion);

		header("Location: guardado.php");	
	}


	
?>