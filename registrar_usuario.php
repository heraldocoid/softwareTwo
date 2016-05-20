<!doctype html>
<html lang="en">
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="Js/efectos.js"> </script>
<script src="Js/scripts.js"> </script>
<script src="Js/jquery.numeric.js"> </script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<header style="background:#fff;">
		<div id="contenedor3">
			<form action="registro_usuario.php" method="post">
				<label>N° identificación*</label><br/>
				<input type="text" name="identificacion" class="reg_ide">
				<br><label>Tipo de usuario*</label><br/>
				<select name="tipo_usuario" class="reg_tipo">
					<option>--Tipo--</option>
					<option>Administrador</option>
					<option>Usuario</option>
				</select>
				<br><label>Username*</label><br/>
				<input type="text" name="usuario" class="reg_usu">
				<br><label>Password*</label><br/>
				<input type="password" name="contrasena" class="reg_con">
				<input id="btnRegitrarUs" type="submit" value="registrar">
			</form>
		</div>
	</header>
</body>		