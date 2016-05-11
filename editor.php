<?php
	require_once("Clases.php");
	$sql_editor = "select * from usuarios where cedula='".$_GET['cedula']."'";
	$qry_editor = mysql_query($sql_editor, $conexion);
	$row_editor = mysql_fetch_array($qry_editor);
?>

<!doctype html>
<html lang="en">
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="Js/efectos.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<form action="editar.php" method="post">
		<input type="hidden" name="cedula" value="<?php echo $row_editor['cedula']?>">
		<input type="text" name="primerNombre" value="<?php echo $row_editor['primerNombre']?>">
		<input type="text" name="segundoNombre" value="<?php echo $row_editor['segundoNombre']?>">
		<input type="text" name="primerApellido" value="<?php echo $row_editor['primerApellido']?>">
		<input type="text" name="segundoApellido" value="<?php echo $row_editor['segundoApellido']?>">
		<input type="text" name="edad" value="<?php echo $row_editor['edad']?>">
		<select name="genero">
			<option>----Genero----</option>
			<option>Masculino</option>
			<option>Femenino</option>
		</select>
		<input type="text" name="altura" value="<?php echo $row_editor['altura']?>">
		<input type="text" name="peso" value="<?php echo $row_editor['peso']?>">
		<select name="objetivo">
			<option>--Actividad--</option>
			<option>Bajar de peso</option>
			<option>Subir de peso</option>
			<option>Marcar</option>
		</select>
		<input type="text" name="horas" value="<?php echo $row_editor['horas']?>">
		<textarea name="observaciones"><?php echo $row_editor['observaciones']; ?></textarea>
		<input type="submit" value="Actualizar">
	</form>
</body>
</html>