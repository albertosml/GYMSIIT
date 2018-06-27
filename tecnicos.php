<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Técnicos</title>
		<link rel="stylesheet" type="text/css" href="tecnicos.css" />
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

		<section id="tecnicos">
			<article id="tec">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec1">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec2">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec3">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec4">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec5">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec6">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec7">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>

			<article id="tec8">
				<img src="imagenes/tecnico.jpeg" alt="tecnico"/>
				<h3>Pepe Fernández</h3>
			</article>
		</section>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
