<?php
session_start();
include "Clases.php";
/*$tipos = $_GET['tipo'];
$sql="select *from ejercicios where tipo='".$tipos."'";
$respuesta=mysql_query($sql,$conexion);*/


$tipos = $_GET['tipo'];
$query_mostrarEjercicios = "SELECT * FROM ejercicios_usuario WHERE fk_ejercicio_tipo = '".$tipos."' ";
mysql_select_db($database, $conexion);
$datos_consultarEjercicios = mysql_query($query_mostrarEjercicios, $conexion) or die (mysql_error());

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<table>
		<tr>
			<th>Nombre ejercicio</th>
			<th>Serie</th>
			<th>Repeticiones</th>
			<th><a href="sistema.php">volver al inicio</a></th>
		</tr>
		<?php
		while($tipo_ejercicio = mysql_fetch_array($datos_consultarEjercicios))
			echo '<tr> 
				<td> '.$tipo_ejercicio['fk_ejercicio'].' </td>
				<td> '.$tipo_ejercicio['fk_ejercicio_tipo'].' </td>
				<td> '.$tipo_ejercicio['repeticion'].' </td>
				<td> '.$tipo_ejercicio['serie'].' </td>
			</tr>';
		?>
	</table>

</body>
</html>
