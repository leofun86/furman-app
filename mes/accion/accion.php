<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../../css/madre.css">
		<link rel="icon" href="../../media/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="../../bs/bootstrap.min.css">
		<link rel="stylesheet" href="../../bs/bootstrap-grid.css">
		<link rel="stylesheet" href="../../bs/bootstrap-reboot.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<title>
			<?php
				$menuMes = $_GET['menuMes'];
				echo $menuMes;
			?>
		</title>
	</head>

	<body>

		<div class="container-fluid" style="height:100%;">
			<div class="main row uno" style="height:100%;">
				<div class="col3" style="text-align:center;color:white;">
					<?php
					$accion = $_GET['ac'];
					$menuMes = $_GET['menuMes'];
					include ('../../conexion.php');
					 if ($accion == 2) {
						 if (isset($_POST['lugar']) && isset($_POST['empresa']) && isset($_POST['tramite']) && isset($_POST['comentario']) && isset($_POST['honorarios']) && isset($_POST['timbres']) && isset($_POST['multas']) && isset($_POST['boletos'])) {

	 						$lugar = $_POST['lugar'];
	 						$empresa = $_POST['empresa'];
	 						$tramite = $_POST['tramite'];
	 						$comentario = $_POST['comentario'];
	 						$honorarios = $_POST['honorarios'];
	 						$timbres = $_POST['timbres'];
	 						$multas = $_POST['multas'];
	 						$boletos = $_POST['boletos'];

	 					}
					 } else {
						 if (isset($_POST['fecha']) && isset($_POST['lugar']) && isset($_POST['empresa']) && isset($_POST['tramite']) && isset($_POST['comentario']) && isset($_POST['honorarios']) && isset($_POST['timbres']) && isset($_POST['multas']) && isset($_POST['boletos'])) {

	 						$fecha = $_POST['fecha'];
	 						$lugar = $_POST['lugar'];
	 						$empresa = $_POST['empresa'];
	 						$tramite = $_POST['tramite'];
	 						$comentario = $_POST['comentario'];
	 						$honorarios = $_POST['honorarios'];
	 						$timbres = $_POST['timbres'];
	 						$multas = $_POST['multas'];
	 						$boletos = $_POST['boletos'];

	 					}
					 }

					//mysqli_query($conexion, "select * from tramites");

						switch ($accion) {

							case 1:
								$num = $_GET['num'];
								$numMes = $_GET['numMes'];
								$query = "INSERT INTO $menuMes (fecha, lugar, empresa, tramite, comentario, honorarios, timbres, multas, boletos) VALUES ('$fecha', '$lugar', '$empresa', '$tramite', '$comentario', '$honorarios', '$timbres', '$multas', '$boletos')";
								$ejecucion = $conexion->query($query);
								echo '<div class="acTramite">';
								echo '¡Trámite agregado!<br>';
								echo '<button style="width:150px;margin-top:10px;" class="btn btn-success" id="volver" ><a href="../tramite.php?menuMes='.$menuMes.'&numMes='.$numMes.'&num='.$num.'" style="text-decoration:none;color:white;">Agregar trámite</a></button>

											<button style="width:150px;margin-top:5px;" class="btn btn-danger" id="volver" ><a href="../mes.php?menuMes='.$menuMes.'&op=2" style="text-decoration:none;color:white;">Volver</a></button>
								';
								echo '</div>';
								break;
							case 2:
								$id = $_GET['id'];
								$consulta = "UPDATE $menuMes SET lugar='$lugar', empresa='$empresa', tramite='$tramite', comentario='$comentario', honorarios='$honorarios', timbres='$timbres', multas='$multas', boletos='$boletos' WHERE id =$id";
								if (mysqli_query($conexion, $consulta)) {
									echo '<div class="acTramite">';
									echo '¡Trámite actualizado!<br>';
									echo '<button style="width:150px;margin-top:10px;" class="btn btn-danger"><a id="volver" href="../mes.php?op=2&menuMes='.$menuMes.'" style="text-decoration:none;color:white;">Volver</a></button>';
									echo '</div>';
								} else {
									echo '<div class="acTramite">';
									echo 'Error :(<br>';
									echo '<button style="width:150px;margin-top:10px;" class="btn btn-danger"><a id="volver" href="../mes.php?op=2&menuMes='.$menuMes.'" style="text-decoration:none;color:white;">Volver</a></button>';
									echo '</div>';
								}
								break;
							case 3:
								$id = $_GET['id'];
								$consulta = "DELETE from $menuMes WHERE id = $id";
								if (mysqli_query($conexion, $consulta)) {
									echo '<div class="acTramite">';
									echo '¡Trámite eliminado!<br>';
									echo '<button style="width:150px;margin-top:10px;" class="btn btn-danger"><a id="volver" href="../mes.php?op=2&menuMes='.$menuMes.'" style="text-decoration:none;color:white;">Volver</a></button>';
									echo '</div>';
								} else {
									echo '<div class="acTramite">';
									echo 'Error :(<br>';
									echo '<button style="width:150px;margin-top:10px;" class="btn btn-danger"><a id="volver" href="../mes.php?op=2&menuMes='.$menuMes.'" style="text-decoration:none;color:white;">Volver</a></button>';
									echo '</div>';
								}
								break;

						}



					?>

				</div>

		</div>
	</div>
	</body>

</html>
