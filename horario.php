<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Horario</title>
		<link rel="stylesheet" type="text/css" href="horario.css" />
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

		<table>
			<caption>HORARIO GYMSIIT</caption>
			<thead>
				<tr>
					<th>HORA</th>
					<th>LUNES</th>
					<th>MARTES</th>
					<th>MIÉRCOLES</th>
					<th>JUEVES</th>
					<th>VIERNES</th>
					<th>SÁBADO</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>9:00-10:00</th>
					<td rowspan="2">Yoga</td>
					<td rowspan="2">Pilates</td>
					<td rowspan="2">Taekwondo</td>
					<td rowspan="2">Yoga</td>
					<td rowspan="2" colspan="2">Pilates</td>
				</tr>
				<tr>
					<th>10:00-11:00</th>
				</tr>
				<tr>
					<th>11:00-12:00</th>
					<td>Pilates</td>
					<td rowspan="2">Taekwondo</td>
					<td rowspan="2">Pilates</td>
					<td>Taekwondo</td>
					<td colspan="2">Yoga</td>
				</tr>
				<tr>
					<th>12:00-13:00</th>
					<td>Taekwondo</td>
					<td>Yoga</td>
					<td colspan="2">Taekwondo</td>
				</tr>
				<tr>
					<th>13:00-14:00</th>
					<td colspan="6">No hay más actividades, pero podéis seguir haciendo
deporte en el gimnasio con nuestras máquinas</td>
				</tr>
			</tbody>
			<tfoot>
				<tr><td colspan="7">Le informaremos si se producen cambios en el horario</td></tr>
			</tfoot>
		</table>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
