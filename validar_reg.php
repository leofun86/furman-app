<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Furman trámites</title>
		<link rel="stylesheet" type="text/css" href="css/madre.css">
	</head>

	<body>

		<div id ="contenido">

			<div id="header1">
				<?php include 'header.php'; ?>
				<a  id="index" href="index.php">INICIO</a>
				<br><br>
			</div>

			<?php

			include ('mes/conexion_mes.php');

			$accion = $_GET['ac'];
			$mail = $_POST['mail'];
			$pass = $_POST['pass'];

			switch ($accion) {

				case 1:
					// Agrega una nueva noticia
					$query = "INSERT INTO login (mail, pass) VALUES ('$mail', '$pass')";
					$ejecucion = $conexion->query($query);
					echo '<br>¡Registro completo!<br>';
					/*echo '<a id="agregar2" href="../agregar_abril.php">Agregar trámite</a><br>';*/
					echo '<a id="volver" href="index.php">Volver</a>';
					break;

			}

			?>

		</div>
	</body>

</html>
