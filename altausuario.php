<?php
	  session_start();
 		if(isset($_SESSION["username"])) header("Location: index.php");
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Alta de Usuario</title>
		<link rel="stylesheet" type="text/css" href="altausuario.css" />
		<script type="text/javascript" src="funciones.js"></script>
	</head>
	<body>
		<header>
			<a id="enlace" href="index.php">
				<img src="imagenes/logo.jpeg" alt="logo"/>
			</a>

			<h1>GYMSIIT</h1>

			<form action="abrir_sesion.php" method="post" onsubmit="return validar_sesion()">
				<label for="username">Username</label> <br>
				<input type="text" id="username" size="13" name="username" /> <br>

				<label for="contra">Contraseña</label> <br>
		    <input type="password" id="contra" size="13" name="contra" /> <br>

			  <input type="submit" class="button" value="Enviar" />
		  </form>
		</header>

		<nav>
			Secciones
			<ul>
				<li><a href="actividades.php">Actividades</a></li>
				<li><a href="horario.php">Horario</a></li>
				<li><a href="tecnicos.php">Técnicos</a></li>
				<li><a href="altausuario.php">Alta de Usuarios</a></li>
				<li><a href="foro.php">Foro</a></li>
				<li><a href="perfil.php">Perfil</a></li>
			</ul>
		</nav>

		<h3>FORMULARIO DE ALTA</h3>

		<form id="registro" action="procesar_formulario_alta.php" method="post" enctype="multipart/form-data" onsubmit="return validar_alta()">
			<!-- Campos obligatorios -->
			<fieldset>
				<legend>Nombre de usuario</legend>
				<label for="username"></label>
				<input type="text" id="user" name="username" placeholder="Pon tu nombre de usuario" />
			</fieldset>

			<fieldset>
				<legend>Nombre</legend>
				<label for="nombre"></label>
				<input type="text" id="nombre" name="nombre" placeholder="Pon tu nombre" />
			</fieldset>

			<fieldset>
				<legend>Apellidos</legend>
				<label for="apellidos"></label>
				<input type="text" id="apellidos" name="apellidos" placeholder="Pon tus apellidos" />
			</fieldset>

			<fieldset>
				<legend>Correo Electrónico</legend>
				<label for="correo"></label>
				<input type="text" id="correo" name="correo" placeholder="Pon tu correo electrónico" />
			</fieldset>

			<fieldset>
				<legend>Contraseña</legend>
				<label for="contra"></label>
				<input type="password" id="pass" name="contra" placeholder="Pon tu contraseña" />
			</fieldset>

			<fieldset>
				<legend>Repite la contraseña</legend>
				<label for="contra1"></label>
				<input type="password" id="contra1" name="contra1" placeholder="Pon la misma contraseña" />
			</fieldset>

			<fieldset>
				<legend>Fecha de nacimiento</legend>
				<label for="fechanac"></label>
				<input type="date" id="fechanac" name="fechanac" />
			</fieldset>

			<fieldset>
				<legend>Foto</legend>
				<label for="foto"></label>
				<input type="file" id="foto" name="photo" />
			</fieldset>

			<!-- Campos opcionales -->
			<fieldset>
				<legend>Número de horas semanales a las que quiere asistir al centro deportivo</legend>
				<label for="nhoras"></label>
				<input type="number" id="nhoras" name="nhoras" />
			</fieldset>

			<fieldset>
				<legend>¿Es la primera vez que vas a un gimnasio?</legend>
				<label for="primera_asistencia"></label>
				<input type="radio" id="primera_asistencia" name="primera_asistencia" value = "yes" checked/>Sí
				<input type="radio" id="primera_asistencia1" name="primera_asistencia" value = "no"/>No
			</fieldset>

			<fieldset>
				<legend>¿Cómo has conocido el centro deportivo?</legend>
				<datalist id="lista_conocimiento_centro">
					<option value="Por un amigo, familiar o conocido">
					<option value="Mediante internet">
					<option value="Por un medio de comunicación">
					<option value="Publicidad">
					<option value="Otra razón">
				</datalist>
				<label for="conocimiento_centro"></label>
				<input type="text" id="conocimiento_centro" list="lista_conocimiento_centro"/>
			</fieldset>

			<fieldset>
				<legend>Comentario</legend>
				<label for="comentario"></label>
				<textarea id="comentario" rows="3" cols="60"></textarea>
			</fieldset>

			<input type="submit" id="button1" value="Registrar formulario" />
			<input type="reset" id="button2" value="Resetear formulario" />
		</form>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
