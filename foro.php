<?php session_start(); ?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Foro</title>
		<link rel="stylesheet" type="text/css" href="foro.css" />
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

<?php

		try {
				 $conexion = new PDO("mysql:host=localhost;dbname=db14275445_pw1718","x14275445","14275445");
				 $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

				 echo "<h3 id=\"t\">Hilos en el foro:</h3>";

				 $i = 0;
				 $num_entradas = 0;

				 foreach ($conexion->query("select * from Hilo;") as $hilos) {
				 	 echo "<details>";
					 echo "<summary>".$hilos["titulo"]."</summary>";

					 $username = $hilos["username"];

					 foreach ($conexion->query("select photo from Usuario where username='$username'; ") as $foto) {
						 $imagen = $foto["photo"];
						 $a = array();
						 foreach ($conexion->query("select titulo from Hilo where username='$username'; ") as $t) {
							 $a[] = $t["titulo"];
						 }
						$nombre_funcion = "mostrarTitulos".$i;
 						echo "<script type=\"text/javascript\">";
 						echo "function $nombre_funcion() {";
 						echo "	var array = ".json_encode($a)."; ";
 						echo "	if(array == null || array.length == 0) {";
 						echo "		alert(\"Este usuario no ha realizado ningún hilo.\");";
 						echo "	}";
 						echo "	else {";
 						echo "		var mensaje = \"Los titulos de las entradas que ha realizado el usuario son: \";";
 						echo "		for(i in array) { mensaje += \" - \" + array[i] + \" \"; }";
 						echo "		alert(mensaje);";
 						echo "	}";
 						echo "}";
 						echo "</script>";

 						echo "<img src=\"$imagen\" alt=\"foto del usuario\" onmouseover=\"$nombre_funcion()\" />";
 						$i++;
					 }

					 echo "<p><strong>".$hilos["username"]."</strong> abrió el hilo el día ".$hilos["dia"]."/".$hilos["mes"]."/".$hilos["anio"]." a las ".$hilos["hora"].":".$hilos["minuto"].
										"<br> ".$hilos["descripcion"]. "</p>";

							$num_hilo = $hilos["codHilo"];

					 foreach ($conexion->query("select * from Entrada where codHilo='$num_hilo';") as $fila) {

						 $username = $fila["username"];

						 foreach ($conexion->query("select photo from Usuario where username='$username'; ") as $foto) {
							  $imagen = $foto["photo"];
								$a = array();
								foreach ($conexion->query("select titulo from Hilo where username='$username'; ") as $t) {
									$a[] = $t["titulo"];
								}
               $nombre_funcion = "mostrarTitulos".$i;
							 echo "<script type=\"text/javascript\">";
							 echo "function $nombre_funcion() {";
							 echo "	var array = ".json_encode($a)."; ";
							 echo "	if(array == null || array.length == 0) {";
							 echo "		alert(\"Este usuario no ha realizado ningún hilo.\");";
							 echo "	}";
							 echo "	else {";
							 echo "		var mensaje = \"Los titulos de las entradas que ha realizado el usuario son: \";";
							 echo "		for(i in array) { mensaje += \" - \" + array[i] + \" \"; }";
							 echo "		alert(mensaje);";
							 echo "	}";
							 echo "}";
							 echo "</script>";

	 						 echo "<img src=\"$imagen\" alt=\"foto del usuario\" onmouseover=\"$nombre_funcion()\" />";
							 $i++;
						 }

						echo "<p><strong>".$fila["username"]."</strong> respondió al hilo el día ".$fila["dia"]."/".$fila["mes"]."/".$fila["anio"]." a las ".$fila["hora"].":".$fila["minuto"]."<br>"
										 .$fila["descripcion"]." </p>";
					 }

					 if(isset($_SESSION["username"]) ) { // Si ha iniciado sesión, puede crear una entrada
						 		$id = "respuesta".$num_entradas;
					 			echo "<p id=\"res\"><strong>Responder hilo</strong></p>";

								echo "<form action=\"procesar_nueva_entrada.php\" method=\"post\" onsubmit=\"return validar_entrada($num_entradas)\">";
								echo "  <label for=\"$id\">Respuesta</label> <br>";
								echo "  <textarea id=\"$id\" name=\"respuesta\" rows=\"3\" cols=\"50\"></textarea> <br>";

								echo "	<input type=\"submit\" id=\"button\" value=\"Contestar hilo\" />";

								echo "  <input type=\"hidden\" name=\"codHilo\" value=\"".$num_hilo."\" />";
								echo "</form>";
								$num_entradas++;
						}

						echo "</details>";
				 }

				 if(isset($_SESSION["username"])) { // Si ha iniciado sesión, puede crear un hilo
						echo "<p><strong id=\"new\">Nuevo hilo</strong></p>";

						echo "<form id=\"create\" action=\"procesar_nuevo_hilo.php\" method=\"post\" onsubmit=\"return validar_hilo()\">";
						echo "	<label for=\"titulo\">Título</label> <br>";
						echo "	<input type=\"text\" id=\"titulo\" name=\"titulo\" placeholder=\"Pon el título del hilo\" /> <br>";

						echo "  <label for=\"description\">Descripción</label> <br>";
						echo "	<textarea id=\"description\" name=\"descripcion\" rows=\"3\" cols=\"50\" ></textarea> <br>";

						echo "  <input type=\"submit\" id=\"button3\" value=\"Crear hilo\" />";
						echo "</form>";
				}

    } catch ( PDOException $e ) { echo "<h1 id=\"problema\">Problema al mostrar el foro</h1>"; }

		$conexion = "";
?>

		<footer>
			<h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
		</footer>
	</body>
</html>
