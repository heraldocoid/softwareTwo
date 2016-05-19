<?php
	require_once("Clases.php");
	$restablecer = "select * from accesos where identificacion = '".$_POST['identificacion']."'";
	$qry_restablecer = mysql_num_rows(mysql_query($restablecer,$conexion));
	if($qry_restablecer < 0){
		echo 'el usuario no esta registrado';
	}else{
		$update = 'update accesos set 
			contrasena = "'.md5($_POST['contrasena']).'"
			where identificacion = "'.$_POST['identificacion'].'"';
		$qry_Update = mysql_query($update,$conexion);

		header("Location:index.php");
	}
	
?>