<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Foro</title>
		<link rel="stylesheet" type="text/css" href="foro.css" />
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

				 $fecha_actual = getdate();

				 $titulo = $_POST["titulo"];
				 $descripcion = $_POST["descripcion"];
				 $username = $_SESSION["username"];
				 $dia = $fecha_actual["mday"];
				 $mes = $fecha_actual["mon"];
				 $anio = $fecha_actual["year"];
				 $hora = $fecha_actual["hours"];
				 // Añado un 0 delante a los minutos menores que 10
				 if($fecha_actual["minutes"] < 10) $minuto = "0".$fecha_actual["minutes"];
				 else $minuto = $fecha_actual["minutes"];

				 $conexion->query("insert into Hilo(titulo,descripcion,username,dia,mes,anio,hora,minuto)
				  								values('$titulo','$descripcion','$username','$dia','$mes','$anio','$hora','$minuto');");

				 $conexion = "";

				 header("Location: foro.php");

		} catch ( PDOException $e ) { echo "<h1 id=\"problema\">Problema al crear un nuevo hilo</h1>"; }

?>

	<footer>
		<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
	</footer>
</body>
</html>
