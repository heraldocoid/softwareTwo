<html>
<?php
	require_once('Clases.php');
	$cedula = $_POST['cedula'];
	$query_mostrar = "SELECT * FROM usuarios WHERE cedula = '".$cedula."' ";
	mysql_select_db($database, $conexion);
	$datos_consultar = mysql_query($query_mostrar, $conexion) or die (mysql_error());
	$row = mysql_fetch_array($datos_consultar);

	/*$query_login= sprintf("SELECT *FROM t_usuarios WHERE usuario=%s AND contrasena=%s",

	GetSQLValueString($_POST['user'], "text"),
	GetSQLValueString(md5($_POST['pass']), "text"));

	$datos_login= mysql_query($query_login, $conexion) or die (mysql_error());
	$row_login=mysql_fetch_assoc($datos_login);
	$total_row_login= mysql_num_rows($datos_login);

	if($total_row_login == 1){
		$_SESSION['id_usu'] = $row_login['id_usu'];
		$_SESSION['usuario'] = $row_login['usuario'];	
		
	}*/
?>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<table>
		<tr>
			<th>Cedula</th>
			<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Genero</th>
			<th>Altura</th>
			<th>Peso</th>
			<th>Objetivo del ejercicio</th>
			<th>Horas</th>
			<th>IMC</th>
		</tr>

			<?php 
			echo '
				<tr> 
					<td> '.$row['cedula'].' </td>
					<td> '.$row['primerNombre'].'</td>
					<td> '.$row['segundoNombre'].'</td>
					<td> '.$row['primerApellido'].'</td>
					<td> '.$row['segundoApellido'].'</td>
					<td> '.$row['genero'].'</td>
					<td> '.$row['altura'].'</td>
					<td> '.$row['peso'].'</td>
					<td> '.$row['objetivo'].'</td>
					<td> '.$row['horas'].'</td>
					<td> '.$row['imc'].'</td>
					<td><a href="editor.php?cedula='.$row['cedula'].'">Editar</a></td>
					<td><a href="eliminar.php?cedula='.$row['cedula'].'">Eliminar</a></td>
					<td><a href="sistema.php">volver al inicio</a></td>
				</tr>
			';
			?>
	</table>
			<?php
			if($row['imc'] >= '25' && $row['genero'] == 'Masculino'){
				

				//consulto los ejercicios
				$entrenamiento = "select * from ejercicios_usuario WHERE fk_usuario ='".$cedula."'";
				//$entrenamiento ="select fk_usuario, count(*) from ejercicios group by tipo having count(*) > 1";
				$resultado_entrenamiento = mysql_query($entrenamiento, $conexion);
		?>
					<br/><br/>
					<table>
						<tr>
							<th>Tipo de ejercicio</th>
						</tr>
					
		<?php
				while($tipo = mysql_fetch_array($resultado_entrenamiento)){
				echo '<tr>
						<td>'.$tipo['fk_ejercicio'].'</td>
						<td style="background: #FFF;"> <a href="vertodos.php?tipo='.$tipo['fk_ejercicio'].'">ver todos</a></td>
					</tr>';
				}//end while
			}//end if

		?>
					</table>
		<?php
			//PARA CUANDO ES MENOR A 25

			if($row['imc'] <= '25' && $row['genero'] == 'Masculino'){
					//consulto los ejercicios
					$entrenamiento = "select * from ejercicios_usuario WHERE fk_usuario ='".$cedula."'";
					//$entrenamiento ="select fk_usuario, count(*) from ejercicios group by tipo having count(*) > 1";
					$resultado_entrenamiento = mysql_query($entrenamiento, $conexion);
		?>
					<br/><br/>
					<table>
						<tr>
							<th>Tipo de ejercicio</th>
						</tr>
		<?php
				while($tipo = mysql_fetch_array($resultado_entrenamiento)){
				echo '<tr>
						<td>'.$tipo['fk_ejercicio'].'</td>
						<td style="background: #FFF;"> <a href="vertodos.php?tipo='.$tipo['fk_ejercicio_tipo'].'">ver todos</a></td>
					</tr>';
				}//end while
			}//end if
		?>
					</table>
		<?php



			if($row['imc'] <= '25' && $row['genero'] == 'Femenino'){
				$entrenamiento = "select * from ejercicios_usuario WHERE fk_usuario ='".$cedula."'";
				$resultado_entrenamiento = mysql_query($entrenamiento, $conexion);
		?>	
					<br/><br/>
					<table>
						<tr>
							<th>Tipo de ejercicio</th>
						</tr>	
					<?php
				while($tipo = mysql_fetch_array($resultado_entrenamiento)){
				echo '<tr>
						<td>'.$tipo['fk_ejercicio'].'</td>
						<td style="background: #FFF;"> <a href="vertodos.php?tipo='.$tipo['fk_ejercicio'].'">ver todos</a></td>
					</tr>';
				}//end while
			}//end if

		?>
	</table>
</body>
</html>