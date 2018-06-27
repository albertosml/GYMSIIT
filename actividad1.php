<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Yoga</title>
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
									<input type="text" id="username" size="13" name="username"/> <br>

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
			<h2> Yoga </h2>
			<img src="imagenes/yoga.jpeg" alt="yoga"/>
			<p> El yoga se refiere a una tradicional disciplina física y mental que se originó en la India.
La palabra se asocia con prácticas de meditación en el hinduismo, el budismo y el jainismo. Según sus
practicantes, el yoga otorga como resultado:</p>
			<ul>
				<li>La unión del alma individual con la divinidad (Brahman, Shiva, Visna, Kali, etc.), entre
los que tienen una postura religiosa de tipo devocional.</li>
				<li>La percepción de que el yo es espiritual y no material, entre los que tienen una postura espiritualista.</li>
				<li>El bienestar físico y mental, entre los que tienen una postura racionalista (atea o agnóstica).</li>
			</ul>
			<p>El arqueólogo británico sir John Marshall descubrió en Mohenjo-Daro (Pakistán) un sello con figuras, datable hacia
el siglo XVII a. C., de la cultura del valle del Indo. En 1931 publicó su interpretación,2​ imaginando una supuesta criatura
antropomorfa con cuernos, en una posición sentada con las piernas cruzadas. Marshall elaboró cuatro hipótesis, aún no confirmadas:</p>
			<ul>
					<li>El varón sentado sería el dios hinduista Shiva.</li>
					<li>Como está rodeado por un rinoceronte, una vaca, un elefante, un tigre y un ciervo, Marshall afirmó que se trataba de
Shiva como «Pashupati» (‘señor de las bestias’) y con ese nombre bautizó al sello.</li>
					<li>El varón ―sentado con las piernas cruzadas― estaría practicando una postura de yoga;</li>
					<li>Por lo tanto el yoga tendría por lo menos 35 siglos de antigüedad.</li>
			</ul>
			<p>Otros escritores occidentales ―entre ellos el historiador de las religiones Mircea Eliade (1907-1986), y Georg Feuerstein―4​
creyeron que esa proposición era suficiente prueba de que en la cultura del Indo se conocía el yoga. En realidad se desconoce si una
persona retratada en un sello, sentada con las piernas cruzadas, está practicando «una forma primitiva de yoga» (Feurstein, 1979).</p>
			<p>En cambio, los hinduistas sostienen que el yoga es eterno (anādi: ‘sin comienzo’) y siempre existió. En el hinduismo, se la
cuenta como una de sus seis doctrinas ortodoxas. Estas doctrinas (y sus respectivos fundadores o principales referentes históricos) son:</p>
			<ul>
					<li>yoga (de Patañjali).</li>
					<li>vedanta (de Vyāsa).</li>
					<li>sankhia (de Kapilá).</li>
					<li>purva mimamsa (de Jaimini).</li>
					<li>niaia (de Gautama Akshapada).</li>
					<li>vaisesika (de Kaṇāda).</li>
			</ul>
		</section>

		<section id="der">
	    <strong id="tit">Menú de actividades</strong>
			<ul id="menu_actividades">
				<li><a href="actividad2.php">Pilates</a></li>
				<li><a href="actividad3.php">Taekwondo</a></li>
				<li><a href="actividad2.php">Pilates</a></li>
				<li><a href="actividad3.php">Taekwondo</a></li>
			</ul>
		</section>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
