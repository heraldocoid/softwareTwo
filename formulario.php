<html>

<head>
	<title></title>
</head>

<body>
	<form action="instancias.php" method="post">
		<input type="text" name="cedula" placeholder="Cedula">
		<input type="text" name="primerNombre" placeholder="Primer Nombre">
		<input type="text" name="segundoNombre" placeholder="Segundo Nombre">
		<input type="text" name="primerApellido" placeholder="Primer Apellido">
		<input type="text" name="segundoApellido" placeholder="Segundo Apellido">
		<input type="text" name="edad" placeholder="Edad">
		<select name="genero">
			<option>--Seleccione--</option>
			<option>Masculino</option>
			<option>Femenino</option>
		</select>
		<input type="text" name="altura" placeholder="Altura">
		<input type="text" name="peso" placeholder="Peso">
		<textarea name="observaciones"></textarea>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>