<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Inicio</title>
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script type="text/javascript" src="funciones.js"></script>
	</head>
	<body>
		<header>
			<img src="imagenes/logo.jpeg" alt="logo"/>

			<h1>GYMSIIT</h1>

<?php  if(isset($_SESSION["username"])) { ?>
					<section>
						Conectado como <strong><?php echo $_SESSION["username"]; ?></strong> <br>
						<a href="cerrar_sesion.php">Desconectar</a>
					</section>
<?php	} else { ?>
					<form action="abrir_sesion.php" method="post" onsubmit="return validar_sesion()">
						<label for="username">Username</label> <br>
						<input type="text" id="username" size="13" name="username" /> <br>

						<label for="contra">Contraseña</label> <br>
						<input type="password" id="contra" size="13" name="contra" /> <br>

						<input type="submit" class="button" value="Enviar" />
					</form>
<?php } ?>
		</header>

		<section id="izq">
			<img src="imagenes/centrodeportivo.jpg" alt="centrodeportivo"/>

			<p>¿Estás buscando un gimnasio y no sabes a dónde ir? Pues no lo dudes más, el GYMSIIT, el gimnasio para los estudiantes
de informática y telecomunicaciones, es el lugar donde puedes tonificar tu cuerpo con las diferentes actividades que ofrecemos (yoga, pilates y taekwondo).
Además, también tenemos una gran variedad de aparatos que te ayudarán a ponerte
en forma. Podrás recibir la ayuda de nuestros técnicos, que te proporcionarán
información acerca de los ejercicios más adecuados para conseguir tus objetivos. </p>

			<p> Por lo que podrás presumir de cuerpo en la facultad y llevar a cabo una vida sana.</p>
		</section>

		<ul id="der" >
			<li><a href="actividades.php">Actividades</a></li>
			<li><a href="horario.php">Horario</a></li>
			<li><a href="tecnicos.php">Técnicos</a></li>
			<li><a href="altausuario.php">Alta de Usuarios</a></li>
			<li><a href="foro.php">Foro</a></li>
			<li><a href="perfil.php">Perfil</a></li>
		</ul>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
