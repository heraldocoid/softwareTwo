<!doctype html>
<html lang="en">
<head>
	<title></title>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
<script src="Js/efectos.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<header style="background:#fff;">
		<div id="contenedor3">
			<form action="registro_usuario.php" method="post">
				<label>N° identificación*</label><br/>
				<input type="text" name="identificacion" placeholder="Identificación">
				<br><label>Tipo de usuario*</label><br/>
				<select name="tipo_usuario">
					<option>--Tipo--</option>
					<option>Administrador</option>
					<option>Usuario</option>
				</select>
				<br><label>Username*</label><br/>
				<input type="text" name="usuario" placeholder="Username">
				<br><label>Password*</label><br/>
				<input type="password" name="contrasena" placeholder="Password">
				<input type="submit" value="registrar">
			</form>
		</div>
	</header>
</body>		