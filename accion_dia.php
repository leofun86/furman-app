<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Furman trámites</title>
		<link rel="stylesheet" type="text/css" href="css/madre.css">
	</head>

	<body>

		<div id ="contenido">

			<div id="header1">
				<?php include 'header.php'; ?>
				<a  id="index" href="index1.php">INICIO</a>
				<br><br>
			</div>

			<?php
			$accion = $_GET['ac'];
			include ('agregar/conexion.php');

			if (isset($_POST['lugar']) && isset($_POST['empresa']) && isset($_POST['tramite'])) {

				$lugar = $_POST['lugar'];
				$empresa = $_POST['empresa'];
				$tramite = $_POST['tramite'];

			}

			//mysqli_query($conexion, "select * from tramites");

				switch ($accion) {

					case 1:
						// Agrega una nueva noticia
						$query = "INSERT INTO agregar_dia (lugar, empresa, tramite) VALUES ('$lugar', '$empresa', '$tramite')";
						$ejecucion = $conexion->query($query);
						echo '<br>¡Trámite agregado!<br>';
						echo '<a id="volver" href="index1.php">Volver</a>';
						break;
					case 2:
						$id = $_POST['id'];
						$consulta = "UPDATE agregar_dia SET lugar ='$lugar', empresa ='$empresa', tramite ='$tramite' WHERE id = $id";
						mysqli_query($conexion, $consulta);
						echo '<br>¡Trámite actualizado!<br>';
						echo '<a id="volver" href="index1.php">Volver</a>';
						break;
					case 3:
						$id = $_GET['id'];
						$consulta = "DELETE from agregar_dia WHERE id = $id";
						mysqli_query($conexion, $consulta);
						echo '<br>¡Trámite eliminado!<br>';
						echo '<a id="volver" href="index1.php">Volver</a>';
						break;

				}



			?>

		</div>
	</body>

</html>
