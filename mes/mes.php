<!DOCTYPE html>
<html>
	<head>
		<title style="text-transform:capitalize;">
			<?php
				$menuMes = $_GET['menuMes'];
				echo $menuMes;
			?>
		</title>
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
						$op = $_GET['op'];
						if ($menuMes == 'febrero') {
							$cant = 28;
						} else if ($menuMes == 'abril' || $menuMes == 'junio' || $menuMes == 'setiembre' || $menuMes == 'noviembre') {
							$cant = 30;
						} else {
							$cant = 31;
						}
						switch ($menuMes) {
							case 'enero':
								$numMes='01';
								$numRep='1';
								break;
							case 'febrero':
								$numMes='02';
								$numRep='2';
								break;
							case 'marzo':
								$numMes='03';
								$numRep='3';
								break;
							case 'abril':
								$numMes='04';
								$numRep='4';
								break;
							case 'mayo':
								$numMes='05';
								$numRep='5';
								break;
							case 'junio':
								$numMes='06';
								$numRep='6';
								break;
							case 'julio':
								$numMes='07';
								$numRep='7';
								break;
							case 'agosto':
								$numMes='08';
								$numRep='8';
								break;
							case 'setiembre':
								$numMes='09';
								$numRep='9';
								break;
							case 'octubre':
								$numMes='10';
								$numRep='10';
								break;
							case 'noviembre':
								$numMes='11';
								$numRep='11';
								break;
							case 'diciembre':
								$numMes='12';
								$numRep='12';
								break;
						}
						if ($op == 1) {
							echo '<div id="chartContainer"></div><br>';
							echo '<div class="titMes">'.$menuMes.'</div>';
							echo '';
							include '../conexion.php';
							for ($i=1; $i <= $cant; $i++) {
							$registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");
							if ($reg = mysqli_fetch_array($registros)) {
								echo '<input type="submit" class="col-lg-1 col-sm-3 col-xs-6 boton_on" value="'.$i.'" onclick="Mostrar_Ocultar'.$i.'()" />';
							} else {
								echo '<input type="submit" class="col-lg-1 col-sm-3 col-xs-6 boton_off" value='.$i.' />';
							}
							echo '<div class="col-lg-12" id="caja'.$i.'" style="display:none;">
								<div class="col-lg-6" id="cajaCont">
								<img id="cerrar" src="../media/cerrar.jpg" onclick="Mostrar_Ocultar'.$i.'()" />';

										include '../conexion.php';
										$registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");
										echo '<h2 style="width:35%;text-transform:uppercase;position:relative;left:0px;top:5px;color:#5d7fba;font-size:0.9em;">'.$i.' de '.$menuMes.' de 2019</h2>
										<hr style="border:1px solid #ccc;">';
										while ($reg = mysqli_fetch_array($registros)) {

											echo '<p id="p">Lugar: '.$reg['lugar']."<br>";
											echo 'Empresa: '.$reg['empresa']."<br>";
											echo 'Trámite: '.$reg['tramite']."<br>";
											if ($reg['comentario'] == null) {
											echo '';} else {
											echo 'Comentario: '.$reg['comentario']."<br>";
											}
											if($reg['timbres'] == null) {
												echo '';
											} else {
												echo 'Timbres: $ '.$reg['timbres'].'<br>';
											}
											if($reg['multas'] == null) {
												echo '';
											} else {
												echo 'Multas: $ '.$reg['multas'].'<br>';
											}
											if ($reg['boletos'] == null) {
											echo '<hr style="border:1px solid #ccc;">';
											} else {
											echo 'Boletos: $ '.$reg['boletos'].'<br></p>
											<hr style="border:1px solid #ccc;">';
											}
										}
								echo '</div>
								</div>
							</hr>';
						}
						$msqlContar = mysqli_query($conexion, "SELECT count(*) AS total FROM $menuMes");
						$contador = mysqli_fetch_assoc($msqlContar);
						$msqlBoletos = mysqli_query($conexion, "SELECT sum(boletos) AS totalB FROM $menuMes");
						$boletos = mysqli_fetch_assoc($msqlBoletos);
						$msqlSumar = mysqli_query($conexion, "SELECT sum(honorarios) AS totalH FROM $menuMes");
						$honorarios = mysqli_fetch_assoc($msqlSumar);
						$honorariosT = $boletos['totalB'] + $honorarios['totalH'];
						/*echo '<br><h5 style="font-size:0.9em;position:relative;top:12px;background:rgb(57, 186, 59, 0.5); border:none;" class="btn btn-success">Trámites: '.$contador['total'].'</h5>';*/
						echo '
						<br>
							<div class="desc">
									<a href="reporte/reporte.php?ac='.$numRep.'"><img class="descargar" src="../media/descargar.png"></a>
							</div>
						';
						include 'detalles.php';
					} else {
						echo '
							<div class="desc2" style="margin-top:5px;">
								<a href="reporte/reporte.php?ac=1">
									<a href="tramite.php?op='.$op.'&numMes='.$numMes.'&menuMes='.$menuMes.'&num='.$numRep.'"><img  src="../media/tramite.png"></a>
								</a>
							</div>
						';
						echo '<div id="chartContainer""></div><br>';
						echo '<div class="titMes">'.$menuMes.'</div>';
						echo '';
						include '../conexion.php';
						for ($i=1; $i <= $cant; $i++) {
						$registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");
						if ($reg = mysqli_fetch_array($registros)) {
							echo '<input type="submit" class="boton_on" value="'.$i.'" onclick="Mostrar_Ocultar'.$i.'()" />';
						} else {
							echo '<input type="submit" class="boton_off" value='.$i.' />';
						}

						echo '<div class="col-lg-12" id="caja'.$i.'" style="display:none;">

							<div class="col-lg-6" id="cajaCont">
							<img id="cerrar" src="../media/cerrar.jpg" onclick="Mostrar_Ocultar'.$i.'()" />';
									include '../conexion.php';
									$registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");
									echo '<h2 style="width:35%;text-transform:uppercase;position:relative;left:0px;top:5px;color:#5d7fba;font-size:0.9em;">'.$i.' de '.$menuMes.' de 2019</h2>
									<hr style="border:1px solid #ccc;">';
									while ($reg = mysqli_fetch_array($registros)) {
										echo 'Lugar: '.$reg['lugar']."<br>";
										echo 'Empresa: '.$reg['empresa']."<br>";
										echo 'Trámite: '.$reg['tramite']."<br>";
										if ($reg['comentario'] == null) {
										echo '';} else {
										echo 'Comentario: '.$reg['comentario']."<br>";
										}
										if($reg['timbres'] == null) {
											echo '';
										} else {
											echo 'Timbres: $ '.$reg['timbres'].'<br>';
										}
										if($reg['multas'] == null) {
											echo '';
										} else {
											echo 'Multas: $ '.$reg['multas'].'<br>';
										}
										if ($reg['boletos'] == null) {
										} else {
										echo 'Boletos: $ '.$reg['boletos'].'<br></p>';
										}
										echo "<a id='eliminar' href=arreglo.php?op=2&id=".$reg['id']."&menuMes=".$menuMes."&numMes=".$numRep.">Editar</a>&nbsp;&nbsp;-&nbsp;&nbsp;";
										echo "<a id='eliminar' href=accion/accion.php?op=2&id=".$reg['id']."&menuMes=".$menuMes."&ac=3>Eliminar</a>";
										echo '<hr style="border:1px solid #ccc;">';
									}
							echo '</div>
							</div>
						</hr>';
					}
					$msqlContar = mysqli_query($conexion, "SELECT count(*) AS total FROM $menuMes");
					$contador = mysqli_fetch_assoc($msqlContar);
					$msqlBoletos = mysqli_query($conexion, "SELECT sum(boletos) AS totalB FROM $menuMes");
					$boletos = mysqli_fetch_assoc($msqlBoletos);
					$msqlSumar = mysqli_query($conexion, "SELECT sum(honorarios) AS totalH FROM $menuMes");
					$honorarios = mysqli_fetch_assoc($msqlSumar);
					$honorariosT = $boletos['totalB'] + $honorarios['totalH'];

					/*echo '<br><h5 style="font-size:0.9em;position:relative;top:12px;background:rgb(57, 186, 59, 0.5); border:none;" class="btn btn-success">Trámites: '.$contador['total'].'</h5>';*/
					echo '
						<div class="desc">
							<a href="reporte/reporte.php?ac=1">
								<a href="tramite.php?op='.$op.'&numMes='.$numMes.'&menuMes='.$menuMes.'&num='.$numRep.'"><img class="descargar" src="../media/tramite.png"></a>
							</a>
						</div>
					';
					include 'detalles.php';

					}
					 ?>
			 </div>
		</div>
	</div>
	<?php include '../js/grafica.php';?>
	<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
	</body>
</html>
<script type="text/javascript" src="../js/desplegable.js"></script>
<script type="text/javascript" src="../js/mostrar.js"></script>
