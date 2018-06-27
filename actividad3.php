<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Taekwondo</title>
		<link rel="stylesheet" type="text/css" href="actividadn.css" />
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

		<section id="izq">
			<h2> Taekwondo </h2>
			<img src="imagenes/taekwondo.jpg" alt="taekwondo"/>
			<p> El taekwondo es un arte marcial y deporte de combate moderno, el cual fue dado a conocer
como "Taekwondo" en el año 1955 por El General Choi, siendo convertido en deporte olímpico de combate desde el año de
1988, en los J.J.O.O. de Seúl, Corea. donde fue presentado como deporte de exhibición hasta su reconocimiento deportivo
olímpico en los Juegos Olímpicos de Sidney 2000. Si bien, hay dos modalidades de competiciones, el taekwondo promovido por
la WTF (World Taekwondo Federation) es reconocido como deporte olímpico, el arte promovido por la ITF (International Taekwon-Do
Federation) también desarrolla sus propios campeonatos como disciplina deportiva, teniendo amplia repercusión y reconocimiento
alrededor del mundo</p>
			<p>Dentro de las artes marciales y deportes de combate, el Taekwondo destaca por la variedad y
espectacularidad de sus técnicas de patadas, y actualmente, es uno de los deportes de combate más conocidos, y el más popular del
planeta. Para su creacion, el General Choi se basó en el taekkyon coreano (de este derivan la forma de realización de varios de los
golpes con el pie y el trabajo táctico o de pasos y desplazamientos), así como en el karate-Do japonés (de donde provienen los golpes
con el puño y a mano abierta, la planimetría o división por zonas del cuerpo humano, los bloqueos, las posiciones y el sistema de grados
por cinturones de colores). De esta disciplina también se derivan su primer uniforme y sus primeras formas o "poomsae" conocidas como
"Hyong" en la ITF (International Taekwon-Do Federation) y como "Palgwe" en la WTF (World Taekwondo Federation). Hoy en día, estas formas
básicas han sido reemplazadas por las formas "Tul" en la ITF, y por las formas "Taeguk" en la WTF, con el fin de afianzar aún más su propia identidad.</p>
			<p>Los beneficios de la práctica continua del Taekwondo son innumerables. Muchos estudios han revelado que las
personas que se ejercitan regularmente en una disciplina deportiva, a lo largo de su vida, tienen menos riesgos de obesidad, desarrollo
de enfermedades crónicas, drogadicción, entre otras condiciones que afectan la salud física, mental y emocional. Las investigaciones realizadas
en adolescentes, mostraron que la práctica continua del taekwondo como arte marcial, ayuda a mejorar la salud en general, y condiciona de forma apropiada
los reflejos, mejorando el tiempo de reacción.</p>
			<p>Asimismo, un estudio realizado con personas mayores de cuarenta años mostró que la práctica cotidiana de las artes marciales
tradicionales de naturaleza "dura", mejora el balance y el tiempo de reacción de las personas.3? Por esta razón, se puede concluir que el taekwondo no es
simplemente un deporte más que otorga una óptima condición física y buenos hábitos de vida, sino que además otorga a los practicantes dedicados a explorar
la totalidad del arte, la posibilidad de reaccionar con eficacia ante una amenaza o situación adversa.</p>
			<p>Como en otras artes marciales tradicionales, en el Taekwondo, los grados son representados por las llamados cinturones de colores,
(otorgadas no solo por la destreza física, sino por su crecimiento personal), los significados de estas se basan en los ciclos de la naturaleza, en definitiva:
el entrenamiento en artes marciales es un proceso continuo de maduración emocional, enmarcado dentro del respeto, la constancia y la disciplina.</p>
		</section>

		<section id="der">
			<strong id="tit">Menú de actividades</strong>
			<ul id="menu_actividades">
				<li><a href="actividad2.php">Pilates</a></li>
				<li><a href="actividad1.php">Yoga</a></li>
				<li><a href="actividad2.php">Pilates</a></li>
				<li><a href="actividad1.php">Yoga</a></li>
			</ul>
		</section>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
