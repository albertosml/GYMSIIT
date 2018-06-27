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

<?php

		try {
					$conexion = new PDO("mysql:host=localhost;dbname=db14275445_pw1718","x14275445","14275445");
					$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

					$username = $_POST["username"];

					// Compruebo si el usuario está registrado en la base de datos
					foreach ($conexion->query("select username from Usuario;") as $fila) {
						if($username == $fila["username"]) header("Location: altausuario.php");
					}

				  $nombre = $_POST["nombre"];
				  $apellidos = $_POST["apellidos"];
				  $correo = $_POST["correo"];
				  $contra = md5($_POST["contra"]);
				  $fechanac = $_POST["fechanac"];
				  $tipo = str_replace("image/","",$_FILES["photo"]["type"]);
					$nombre_foto = "imagenes/foto_".$username.".".$tipo;
					if(move_uploaded_file($_FILES["photo"]["tmp_name"],$nombre_foto)) {
						$conexion->query("insert into Usuario values('$username','$nombre','$apellidos','$correo',
	                           '$contra','$fechanac','$nombre_foto');");
?>
		<h3>FORMULARIO DE ALTA</h3>

		<form id="registro">
      <fieldset>
				<legend>Nombre de usuario</legend>
				<label for="username"></label>
				<input type="text" id="username" name="username" value="<?php echo $username; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Nombre</legend>
				<label for="nombre"></label>
				<input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Apellidos</legend>
				<label for="apellidos"></label>
				<input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" />
			</fieldset>

			<fieldset>
				<legend>Correo Electrónico</legend>
				<label for="correo"></label>
				<input type="text" id="correo" name="correo" value="<?php echo $correo; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Contraseña</legend>
				<label for="contra"></label>
				<input type="password" id="contra" name="contra" value="<?php echo $contra; ?>"/> <br>
			</fieldset>

			<fieldset>
				<legend>Fecha de nacimiento</legend>
				<label for="fechanac"></label>
				<input type="text" id="fechanac" name="fechanac" value="<?php echo $fechanac; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Foto</legend>
				<label for="photo"></label>
				<input type="text" id="photo" name="photo" value="<?php echo $nombre_foto; ?>" />
			</fieldset>
		</form>

<?php
					}
					else echo "<h1 id=\"problema\">Problema al subir la foto</h1>";

	 } catch ( PDOException $e ) { echo "<h1 id=\"problema\">Problema al darle de alta al usuario como miembro de GYMSIIT;
																				revise los datos e inténtelo otra vez</h1>";}

	 $conexion = "";
?>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
