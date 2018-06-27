<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Pilates</title>
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
			<h2> Pilates </h2>
			<img src="imagenes/pilates.jpg" alt="pilates"/>
			<p> El método Pilates, o simplemente Pilates, es un sistema de entrenamiento físico
y mental creado a principios del siglo XX por Joseph Hubertus Pilates, quien lo ideó basándose en su conocimiento
de distintas especialidades como gimnasia, traumatología y yoga, uniendo el dinamismo y la fuerza muscular con
 el control mental, la respiración y la relajación. </p>
			<p> En sus principios fue llamado Contrología (Contrology), por el propio Pilates, debido
a que recalca el uso de la mente para controlar el cuerpo, pero buscando el equilibrio y la unidad entre ambos.
El método se centra en el desarrollo de los músculos internos para mantener el equilibrio corporal y dar estabilidad
y firmeza a la columna vertebral, por lo que es muy usado como terapia en rehabilitación? y para, por ejemplo, prevenir
y curar el dolor de espalda. Se practica en todo el mundo y debe su popularidad cada vez mayor a que es practicado por
personajes famosos del mundo de la música, el cine, la danza o el deporte.</p>
			<p>J. H. Pilates fue un niño enfermizo, lo que le llevó a estudiar el cuerpo humano y la manera de fortalecerlo
mediante el ejercicio. De esta manera, con el tiempo llegó a ser un gran atleta. Fue en Inglaterra donde comenzaría a
desarrollar su método al ser internado durante la Primera Guerra Mundial, debido a su nacionalidad alemana, en un campo de
concentración. Trabajando como enfermero, desarrolló una metodología para mejorar el estado de salud de otros internos
mediante el ejercicio. Para los más débiles y enfermos montó sobre las camas un sistema de poleas y cuerdas para ejercitar
los músculos, lo cual fue el origen de algunos de sus posteriores aparatos (reformador, trapecio, silla y barril). Con el
tiempo desarrollaría un gran número de ejercicios para ser realizados en ellos, así como otros para ser practicados
simplemente en el suelo, sobre una colchoneta.</p>
			<p>Escribió dos libros. En el primero Tu salud: un sistema correctivo de ejercicio que revoluciona el campo de la Educación
Física (Your Health: A Corrective System of Exercising That Revolutionizes the Entire Field of Physical Education), en 1934, expuso
sus teorías y filosofía sobre salud, higiene y ejercicio físico. En el segundo, Regreso a la vida a través de la contrología (Return
to Life through Contrology), en 1945, es un manual práctico con 34 ejercicios básicos, para que sus potenciales clientes probaran
en su casa, sin necesidad de aparatos, que el método realmente funcionaba.</p>
			<p>Tras su fallecimiento en 1967, su esposa Clara se hizo cargo del estudio por otros diez años, aunque durante todo ese tiempo
fue dirigido por una de las alumnas de Joseph, Romana Kryzanowska. Pilates no formó expresamente profesores de su método, pero varios
alumnos abrieron centros para enseñar su práctica y dos de los primeros, Lolita San Miguel y Kathy Grant fueron oficialmente certificados
por él para enseñarlo, bajo los auspicios de la Universidad de Nueva York. Junto a RonFletcher, que fundó un estudio en Beverly Hills en
1970, comenzó el reconocimiento del método entre los actores de Hollywood, y la psicoanalista Mary Bowen, que abrió su estudio en 1975.
Estos fueron denominados “los mayores” (the elder), por la organización a la que pertenecen, la Pilates Method Alliance. El término hace
referencia a aquellos que estudiaron directamente con Pilates. Romana Kryzanowska y Mary Pilates (sobrina de Joseph Pilates) también fueron
consideradas elders, aunque no pertenezcan a esta organización.</p>
		</section>

		<section id="der">
	    <strong id="tit">Menú de actividades</strong>
			<ul id="menu_actividades">
				<li><a href="actividad1.php">Yoga</a></li>
				<li><a href="actividad3.php">Taekwondo</a></li>
				<li><a href="actividad1.php">Yoga</a></li>
				<li><a href="actividad3.php">Taekwondo</a></li>
			</ul>
		</section>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
