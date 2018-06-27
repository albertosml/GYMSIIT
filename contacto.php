<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Contacto</title>
		<link rel="stylesheet" type="text/css" href="contacto.css" />
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

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.1336453227286!2d-3.626739385064067!3d37.19705497986876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fc55025f928b%3A0x4dbbca09efdcad08!2sE.T.S.+de+Ingenier%C3%ADas+Inform%C3%A1tica+y+de+Telecomunicaci%C3%B3n!5e0!3m2!1ses!2ses!4v1522504808448" width="600" height="450" style="border:0" allowfullscreen></iframe>

		<section id="datos_contacto">
			<strong>GYMSIIT</strong>
			<ul>
				<li>Dirección: Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada</li>
				<li>Teléfono: 958 645 612 / 658 945 347 </li>
				<li>Fax: 958 645 612</li>
				<li>Correo Electrónico: vamos@rpesoalabascula.com</li>
				<li>Web: www.centrodeportivoetsiit.com</li>
				<li>Twitter: @gymsiit </li>
				<li>Facebook: gymsiit </li>
				<li>Instagram: @gymsiit</li>
			</ul>
		</section>

		<footer>
			<h2> <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
