<?php
	session_start();
	require_once("Clases.php");

	$sql_acceso ="select *from accesos where usuario='".$_POST['usuario']."'";
	$qry_acceso = mysql_query($sql_acceso,$conexion);
	$row = mysql_fetch_array($qry_acceso);

	$usuario = $row['usuario'];
	$contrasena = $row['contrasena'];
  

   if (md5($contrasena) == md5($_POST['contrasena']))
   {				   
     //establecermos las variables de sesión
     	$_SESSION["connect"] = $row["usuario"];

  	 	header ("Location: sistema.php");
		
	}
	else
	{
		//echo $_POST['contrasena'];
		header ("Location: index.php");
	}
	

?>