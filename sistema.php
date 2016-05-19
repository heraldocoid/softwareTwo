<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="Js/efectos.js"> </script>
	<script src="Js/scripts.js"> </script>
	<script src="Js/jquery.numeric.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<header>
		<div class="contenedor2" id="uno">
			<a onclick="ventanas(1);" class="cursor">
				<img class="icon" src="images/icon1.png">
			</a>
			<p class="texto">Crear usuario</p>
		</div>

		<div class="contenedor2" id="dos">
			<a onclick="ventanas(3);" class="cursor">
				<img class="icon" src="images/icon2.png">
			</a>
			<p class="texto">Consultar usuario</p>
		</div>
		
		<div class="contenedor2" id="tres">
			<a onclick="ventanas(5);" class="cursor">
				<img class="icon" src="images/icon5.png">
			</a>
			<p class="texto">Crear ejercicios</p>
		</div>
		
		<div class="contenedor2" id="cuatro">
			<a onclick="ventanas(7);" class="cursor">
				<img class="icon" src="images/icon6.png">
			</a>
			<p class="texto">Relacionar ejercicios</p>
		</div>
		<div class="contenedor2" id="cinco">
			<a href="registrar_usuario.php" class="cursor">
				<img class="icon" src="images/icon6.png">
			</a>
			<p class="texto">Registrar usuarios</p>
		</div>
	</header>
	<div id="crear" style="display:none;">
		<div id="contenedor">
			<a onclick="ventanas(2);" class="cursor"><span class="derecha">X</span></a>
			<!--form onSubmit="return false" id="form_registro" name="fvalida"-->
			<form action="crear_usuarios.php" method="post" id="form_registro" name="fvalida">
				<label>N° identificación*</label><br/>
				<input type="text" name="cedula" class="ced">
				<br/><label>Primer Nombre*</label><br/>
				<input type="text" name="primerNombre" class="pn">
				<br/><label>Segundo Nombre*</label><br/>
				<input type="text" name="segundoNombre" class="sn">
				<br/><label>Primer apellido*</label><br/>
				<input type="text" name="primerApellido" class="pa">
				<br/><label>Segundo apellido*</label><br/>
				<input type="text" name="segundoApellido" class="sa">
				<br/><label>Edad*</label><br/>
				<input type="text" name="edad" class="ed">
				<br/><label>Sexo*</label><br/>
				<select name="genero" class="gen">
					<option>----Genero----</option>
					<option>Masculino</option>
					<option>Femenino</option>
				</select>
				<br/><label >Estatura*</label><br/>
				<input type="text" name="altura" class="al">
				<br/><label>Peso*</label><br/>
				<input type="text" name="peso" class="pe">
				<br/><label>Actividad*</label><br/>
				<select name="objetivo" class="obj">
					<option>--Actividad--</option>
					<option>Bajar de peso</option>
					<option>Subir de peso</option>
					<option>Marcar</option>
				</select>
				<br/><label>Horas disponibles*</label>
				<br/><input type="text" name="horas" class="horas">
				<input type="hidden" name="imc" class="imc">
				<br/><label >Observaciones*</label><br/>
				<textarea name="observaciones" class="ob" ></textarea>
				
				<!--input id="btnSubmit" type="submit" value="Guardar Datos" onClick="crear_datos(ced.value,pn.value,sn.value,pa.value,sa.value,ed.value,gen.value,al.value,pe.value,obj.value,horas.value,imc.value,ob.value);"-->
				<input id="btnSubmit" type="submit" value="guardar">
			</form>
		</div>
		<div id="fondonegro"></div>
	</div>
	<div id="consultar" style="display:none;">
		<div id="contenedor3">
			<a onclick="ventanas(4);" class="cursor"><span class="derecha">X</span></a>
			<!--form action="mostrarDos.php" method="post"-->
			<form action="mostrar.php" method="post" id="form_registro" name="fvalida">
				<label>Identificación*</label><br/>
				<input type="text" name="cedula" class="ide">
				<input id="btnBuscar" type="submit" value="Enviar">
			</form>
		</div>
	</div>
	<div id="crearEjercicios" style="display:none;">
		<div id="contenedor3">
			<a onclick="ventanas(6);" class="cursor"><span class="derecha">X</span></a>
			<form action="crear_eje.php" method="post">
				<label>Tipo*</label><br/>
				<select name="tipo" class="tipo">
					<option>--Seleccione--</option>
					<option>Abdominales</option>
					<option>Brazo</option>
					<option>Espalda</option>
					<option>Hombro</option>
					<option>Lumbar</option>
					<option>Pecho</option>
					<option>Pierna</option>
					<option>Pantorrilla</option>
					<option>Antebrazo</option>
				</select>
				<br/><label>Nombre ejercicio*</label><br/>
				<input type="text" name="nombre_ejercicio" class="nej">
				<input id="btnEjercicios" type="submit" value="Enviar">
			</form>
		</div>
	</div>
	<div id="relacionarEjercicios" style="display:none;">
		<div id="contenedor3">
			<?php
				require_once('Clases.php');
				$consulta="select tipo, count(*) from ejercicios group by tipo having count(*) > 1";
				//$consulta = "select tipo *from ejercicios";
				mysql_select_db($database, $conexion);
				$respuesta = mysql_query($consulta, $conexion) or die (mysql_error());
			?>
			<a onclick="ventanas(8);" class="cursor"><span class="derecha">X</span></a>
			<form action="inser_relacion.php" method="post">
				<label>N° identificación*</label><br/>
				<input type="text" name="fk_usuario" class="fkus"/>
				<br/><label>Categoria Ejercicio*</label><br/>
				<select name="fk_ejercicio" class="fkej">
					<option>--Seleccionar--</option>
				<?php 
				while($relacion = mysql_fetch_array($respuesta))
					echo '<option value="'.$relacion['tipo'].'" selected> '.$relacion['tipo'].'</option>';
				?>
				</select>
				<br/><label>Tipo Ejercicio*</label><br/>
				<select name="fk_ejercicio_tipo" class="te">
					<option>--Seleccionar--</option>
				<?php
				/*if($relacion['tipo'] != "--Seleccionar--"){
					$consultar = "select nombre_ejercicio from ejercicios where tipo='".$relacion['tipo']."'";
					$datos_consultar = mysql_query($consultar, $conexion);
					while($ejercicio_nombre = mysql_fetch_array($datos_consultar))
					echo '<option value="'.$ejercicio_nombre['nombre_ejercicio'].'" selected> '.$ejercicio_nombre['nombre_ejercicio'].'</option>';
					echo $consultar;
				} */

				$consultar = "Select nombre_ejercicio from ejercicios";
				$qry_ejercicios = mysql_query($consultar,$conexion);
					while($rela_ejercicio = mysql_fetch_array($qry_ejercicios)){
						echo '<option value="'.$rela_ejercicio['nombre_ejercicio'].'"> '.$rela_ejercicio['nombre_ejercicio'].'</option>';
					}
				?>
				</select>
				<br/><label>Repeticiones*</label><br/>
				<input type="text" name="repeticion" class="rep">
				<br/><label>Serie*</label><br/>
				<input type="text" name="serie" class="ser">
				<input id="btnRelacion" type="submit" value="Relacionar">
			</form>
		</div>
	</div>
</body>
</html>