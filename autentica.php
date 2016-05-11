<?php
	session_start();
	require_once("Clases.php");

	$sql="select *from accesos where usuario='".$_POST['usuario']."'";
	$qry_acceso = mysql_query($sql,$conexion);
	$row = mysql_fetch_array($qry_acceso);

	$usuario=$row['usuario'];
	$contrasena =$row['contrasena'];
  

   if ($contrasena == $_POST['contrasena'])
   {				   
     //establecermos las variables de sesión
     	$_SESSION["connect"] = $row["usuario"];
	 
  	 	header ("Location: sistema.php");
		
	}
	else
	{
		header ("Location: index.php");
	}
	

?>