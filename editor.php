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
	<div id="contenedor">
		<form action="editar.php" method="post">
			<input type="hidden" name="cedula" value="<?php echo $row_editor['cedula']?>">
			<label>Primer Nombre*</label><br/>
			<input type="text" name="primerNombre" class="" value="<?php echo $row_editor['primerNombre']?>">
			<br/><label>Segundo Nombre*</label><br/>
			<input type="text" name="segundoNombre" class="" value="<?php echo $row_editor['segundoNombre']?>">
			<br/><label>Primer Apellido*</label><br/>
			<input type="text" name="primerApellido" class="" value="<?php echo $row_editor['primerApellido']?>">
			<br/><label>Segundo Apellido*</label><br/>
			<input type="text" name="segundoApellido" class="" value="<?php echo $row_editor['segundoApellido']?>">
			<br/><label>Edad*</label><br/>
			<input type="text" name="edad" class="" value="<?php echo $row_editor['edad']?>">
			<br/><label>Genero*</label><br/>
			<select name="genero" class="">
				<option>----Genero----</option>
				<option>Masculino</option>
				<option>Femenino</option>
			</select>
			<br/><label>Altura*</label><br/>
			<input type="text" name="altura" class="" value="<?php echo $row_editor['altura']?>">
			<br/><label>Peso*</label><br/>
			<input type="text" name="peso" class="" value="<?php echo $row_editor['peso']?>">
			<br/><label>Objetivo*</label><br/>
			<select name="objetivo" class="">
				<option>--Actividad--</option>
				<option>Bajar de peso</option>
				<option>Subir de peso</option>
				<option>Marcar</option>
			</select>
			<br/><label>Horas disponibles*</label><br/>
			<input type="text" name="horas" class="" value="<?php echo $row_editor['horas']?>">
			<br/><label>Observaciones*</label><br/>
			<textarea name="observaciones" class=""><?php echo $row_editor['observaciones']; ?></textarea>
			<input type="submit" value="Actualizar" id="BtnEditor">
		</form>
	</div>
</body>
</html>