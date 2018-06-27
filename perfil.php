<?php
		session_start();
 		if(!isset($_SESSION["username"])) header("Location: index.php");
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Perfil</title>
		<link rel="stylesheet" type="text/css" href="perfil.css" />
		<script type="text/javascript" src="funciones.js"></script>
	</head>
	<body>
	  <header>
			<a id="enlace" href="index.php">
				<img src="imagenes/logo.jpeg" alt="logo"/>
			</a>

			<h1>GYMSIIT</h1>

		  <section>
				Conectado como <strong><?php echo $_SESSION["username"]; ?></strong> <br>
				<a href="cerrar_sesion.php">Desconectar</a>
			</section>

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

				 $username = $_SESSION["username"];

				 foreach ($conexion->query("select * from Usuario where username='$username';") as $fila) {
				 			$nombre = $fila["nombre"];
							$apellidos = $fila["apellidos"];
							$correo = $fila["correo"];
							$contrasenia = $fila["contrasenia"];
							$fechanac = $fila["fechanac"];
							$photo = $fila["photo"];
				 }

				 if(isset($_POST["nombre"]) && $_POST["nombre"]!=$nombre) {
				  	$nombre = $_POST["nombre"];
						$conexion->query("update Usuario set nombre='$nombre' where username='$username';");
				 }

				 if(isset($_POST["apellidos"]) && $_POST["apellidos"]!=$apellidos) {
				  	$apellidos = $_POST["apellidos"];
						$conexion->query("update Usuario set apellidos='$apellidos' where username='$username';");
				 }

				 if(isset($_POST["correo"]) && $_POST["correo"]!=$correo) {
				  	$correo = $_POST["correo"];
						$conexion->query("update Usuario set correo='$correo' where username='$username';");
				 }

				 if(isset($_POST["contra"]) && $_POST["contra"]!=$contrasenia) {
				  	$contrasenia = md5($_POST["contra"]);
						$conexion->query("update Usuario set contrasenia='$contrasenia' where username='$username';");
				 }

				 if(isset($_POST["fechanac"]) && $_POST["fechanac"]!=$fechanac) {
				  	$fechanac = $_POST["fechanac"];
						$conexion->query("update Usuario set fechanac='$fechanac' where username='$username';");
				 }

				 if(!empty($_FILES["photo"]["name"])) {
					 $tipo = str_replace("image/","",$_FILES["photo"]["type"]);
					 $nombre_foto = "imagenes/foto_".$_SESSION["username"].".".$tipo;
					 unlink($photo); // Elimino del servidor la foto anterior
					 if(move_uploaded_file($_FILES["photo"]["tmp_name"],$nombre_foto)) {
							if($nombre_foto!=$photo) $conexion->query("update Usuario set photo='$nombre_foto' where username='$username';");
					 }
				 }

?>

		<h3>Mis datos</h3>

		<form action="perfil.php" method="post" enctype="multipart/form-data" onsubmit="return validar_perfil()">
			<fieldset>
				<legend>Nombre</legend>
				<label for="nombre"></label>
				<input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Apellidos</legend>
				<label for="apellidos"></label>
				<input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Correo Electrónico</legend>
				<label for="correo"></label>
				<input type="text" id="correo" name="correo" value="<?php echo $correo; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Contraseña</legend>
				<label for="contra"></label>
				<input type="password" id="contra" name="contra" value=""/>
			</fieldset>

			<fieldset>
				<legend>Repite la contraseña</legend>
				<label for="contra1"></label>
				<input type="password" id="contra1" name="contra1" value=""/>
			</fieldset>

			<fieldset>
				<legend>Fecha de nacimiento</legend>
				<label for="fechanac"></label>
				<input type="date" id="fechanac" name="fechanac" value="<?php echo $fechanac; ?>"/>
			</fieldset>

			<fieldset>
				<legend>Foto</legend>
				<label for="photo"></label>
				<input type="file" id="photo" name="photo" value="" />
			</fieldset>

			<input type="submit" id="button1" value="Registrar formulario" />
		</form>

<?php
    } catch ( PDOException $e ) { echo "<h1 id=\"problema\">Problemas al mostrar el perfil</h1>"; }

		$conexion = "";
?>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
