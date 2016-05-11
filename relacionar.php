<?php
	require_once('Clases.php');
	//$consulta="select tipo, count(*) from ejercicios group by tipo having count(*) > 1";
	mysql_select_db($database, $conexion);
	$consulta = "select tipo *from ejercicios";
	//$respuesta = mysql_query($consulta, $conexion);
	

	//$query_mostrarEjercicios = "SELECT * FROM ejercicios WHERE tipo = '".$tipos."' ";
	
	$respuesta = mysql_query($consulta, $conexion) or die (mysql_error());

?>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="inser_relacion.php" method="post">
		<input type="text" name="fk_usuario" placeholder="Numero Cedula"/>
		<select name="fk_ejercicio">
		<?php 
		/*while($relacion = mysql_fetch_array($respuesta))
			echo '<option value="'.$relacion['tipo'].'"> '.$relacion['tipo'].'</option>';*/

		?>
			<option>Pierna</option>
			<option>Pantorrilla</option>
			<option>Brazo</option>
			<option>Hombro</option>
			<option>Espalda</option>
			<option>Abdominales</option>
			<option>Pecho</option>
		</select>
		<input type="submit" value="Relacionar">
	</form>
</body>
</html>