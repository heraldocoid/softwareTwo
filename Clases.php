<?php

/*$conexion = mysql_connect("localhost","root","");
mysql_select_db("db_gym", $conexion);*/

/*session_start();

class Conectar{
	public static function con(){

		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("db_gym", $conexion);
		return $conexion;	
	}
}

class Nuevo_registro{
	public static function insertar($cedula,$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$edad,$genero,$altura,$peso,$imc,$observaciones){
		$sql="insert into usuario (cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,edad,genero,altura,peso,imc,observaciones) 
		values ('$cedula','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$edad','$genero','$altura','$peso','$imc','$observaciones')";
		$sentencia_insertar = mysql_query($sql, Conectar::con());	
	}
}

class Consultar_registro{
	public static function consultar($cedula){
		$consulta="select * from usuario where cedula='$cedula'";
		$sentencia_consulta = mysql_query($consulta, Conectar::con());
		$row = mysql_fetch_array($sentencia_consulta);
		//return $row;
		//echo $consulta;
		header("Location: mostrar.php");
	}
}*/


?>

<?php
/*if(!isset($_SESSION)){
	session_start();	
}*/

	$hostname="localhost";
	$database="db_gym";
	$username="root";
	$password="";
	
	$conexion = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

	include('funciones.php');

?>