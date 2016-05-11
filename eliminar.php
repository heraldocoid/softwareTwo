<?php
	require_once("Clases.php");
	$sql_eliminar = "delete from usuarios where cedula = '".$_GET['cedula']."'";
	$qry_eliminar = mysql_query($sql_eliminar,$conexion);

	header("Location: sistema.php");

?>