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
			<a id="enlace" href="index.php">
				<img src="imagenes/logo.jpeg" alt="logo"/>
			</a>

			<h1>GYMSIIT</h1>

      <form action="abrir_sesion.php" method="post" onsubmit="return validar_sesion()">
					<label for="username">Username</label> <br>
					<input type="text" id="username" size="13" name="username"/> <br>

					<label for="contra">Contraseña</label> <br>
					<input type="password" id="contra" size="13" name="contra"/> <br>

					<input type="submit" class="button" value="Enviar" />
			</form>
		</header>

<?php
    try {
       $conexion = new PDO("mysql:host=localhost;dbname=db14275445_pw1718","x14275445","14275445");
       $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

       $username = $_POST["username"];
	     $contrasenia_introducida = md5($_POST["contra"]);

	     foreach ($conexion->query("select * from Usuario where username='$username';") as $fila) {
	          $contrasenia = $fila["contrasenia"];
	          if($contrasenia == $contrasenia_introducida) $_SESSION["username"] = $username;
	     }

    } catch ( PDOException $e ) { echo "<h1 id=\"problema\">Problema al abrir sesión</h1>"; }

    $conexion = "";

		header("Location: index.php");
?>

  <footer>
    <h2> <a href="contacto.php">Contacto</a> - <a href="como_se_hizo.pdf">Como se hizo</a> </h2>
  </footer>
</body>
</html>
