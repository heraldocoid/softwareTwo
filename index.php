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
			<form action="autentica.php" method="post">
				<!--input type="text" name="identificacion" placeholder="Identificación"/-->
				<label>Username*</label><br/>
				<input type="text" name="usuario">
				<br/><label>Password*</label><br/>
				<input type="password" name="contrasena">
				<br/><a href="restablecer.php" style="color:#fff;">Restablecer la contraseña</a><br>
				<input type="submit" value="Ingresar" />
			</form>
		</div>
	</header>
</body>