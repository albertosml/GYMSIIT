<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Actividades</title>
		<link rel="stylesheet" type="text/css" href="actividades.css" />
		<script type="text/javascript" src="funciones.js"></script>
	</head>
	<body>
		<header>
			<a id="enlace" href="index.php">
				<img src="imagenes/logo.jpeg" alt="logo"/>
			</a>

			<h1>GYMSIIT</h1>

			<?php  if(isset($_SESSION["username"])) {  ?>
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

		<section id="cabecera_movil">
				<nav>
					<p> Secciones </p>
					<img src="imagenes/icono.png" alt="icono"/>
					<ul>
						<li><a href="actividades.php">Actividades</a></li>
						<li><a href="horario.php">Horario</a></li>
						<li><a href="tecnicos.php">Técnicos</a></li>
						<li><a href="altausuario.php">Alta de Usuarios</a></li>
						<li><a href="foro.php">Foro</a></li>
						<li><a href="perfil.php">Perfil</a></li>
					</ul>
				</nav>
				<h2 id="title">GYMSIIT</h2>
<?php			if(isset($_SESSION["username"]))	echo "<a id=\"desc\" href=\"cerrar_sesion.php\">Desconectar</a>";
					else echo "<p id=\"desc\">No conectado</p>"; ?>
		</section>

		<section id="izq">
			<strong id="tit_acti">Actividades</strong>
			<section id="act">
				<figure>
					<img src="imagenes/yoga.jpeg" />
					<figcaption> <h3>Yoga</h3> <a href="actividad1.php">Descripción</a> </figcaption>
				</figure>

				<figure>
					<img src="imagenes/pilates.jpg" />
					<figcaption> <h3>Pilates</h3> <a href="actividad2.php">Descripción</a> </figcaption>
				</figure>

				<figure>
					<img src="imagenes/taekwondo.jpg" />
					<figcaption> <h3>Taekwondo</h3> <a href="actividad3.php">Descripción</a> </figcaption>
				</figure>

				<figure>
					<img src="imagenes/yoga.jpeg" />
					<figcaption> <h3>Yoga</h3> <a href="actividad1.php">Descripción</a> </figcaption>
				</figure>

				<figure>
					<img src="imagenes/pilates.jpg" />
					<figcaption> <h3>Pilates</h3> <a href="actividad2.php">Descripción</a> </figcaption>
				</figure>

				<figure>
					<img src="imagenes/taekwondo.jpg" />
					<figcaption> <h3>Taekwondo</h3> <a href="actividad3.php">Descripción</a> </figcaption>
				</figure>
			</section>
		</section>

		<section id="der">
			<strong id="ult">Últimas noticias</strong>
			<ul>
				<li>Se abre nuevo curso de pilates el lunes 26/03/2018 a las 19:30</li>
				<li>Mañana no hay clase de yoga debido a la enfermedad del técnico, avisaremos
	desde aquí para próximas noticias.</li>
				<li>Os comunicamos que la máquina para correr está rota, la intentaremos
	arreglar en cuanto antes.</li>
				<li>Hoy, habrá paella solidaria en beneficio de la Asociación Española contra el
	Cáncer. El plato de paella costará 3€, las bebidas 2'5€ y los cubatas 6€.</li>
			</ul>
		</section>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
