<!DOCTYPE html>
<html>
	<head>
		<title>Agregar trámite</title>
		<?php include '../meta2.html'; ?>
	</head>

	<body>
		<div class="container-fluid" style="height:100%;">
			<div class="main row uno" style="height:100%;">

				<?php
					$menuMes = $_GET['menuMes'];
					$op = $_GET['op'];

					if($op == 1) {
							include '../header1_2.php';
							include '../menuMeses1_2.php';
					} else {
						include '../header2_2.php';
						include '../menuMeses2_2.php';
					}
					?>

				<div class="col3" style="text-align:center;">

					<?php
						$menuMes = $_GET['menuMes'];
						$numMes = $_GET['numMes'];
						$num = $_GET['num'];
								echo '<div class="titMes2">Agregar trámite</div>';
								echo '
									<form id="formTramite" method="POST" action="accion/accion.php?op=2&ac=1&numMes='.$numMes.'&menuMes='.$menuMes.'&num='.$num.'">
										Fecha<br>
										<!--<input type="date" name="fecha"><br><br>-->
										<input type="text" name="fecha" value="2019-'.$numMes.'-"><br>
										Lugar<br>
										<select name="lugar">';

										include 'formulario/lugar.php';

									echo '
										</select><br>
										Empresa<br>
										<input id="input" type="text" name="empresa"><br>
										Trámite<br>
										<input id="input" type="text" name="tramite"><br>
										Comentario<br>
										<textarea id="input" name="comentario"></textarea><br>
										<input type="hidden" name="honorarios" value="150">
										Timbres<br>
										<input id="input" type="text" name="timbres"><br>
										Multas<br>
										<input id="input" type="text" name="multas"><br>
										Boletos<br>
										<input id="input" type="text" name="boletos"><br>
										<input id="terminar" class="btn btn-success" type="submit" value="Terminar">
										<a href="mes.php?op=2&menuMes='.$mesT2.'" id="cancel" class="btn btn-danger">Cancelar</a>
									</form>
								';

					?>

			 </div>
			 <br><br><br><br>
		</div>

	</div>
	</body>

</html>
<script type="text/javascript" src="../js/desplegable.js"></script>
<script type="text/javascript" src="../js/mostrar.js"></script>
