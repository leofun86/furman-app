<!DOCTYPE html>
<html>
	<head>
		<title><?php $fecha = $_GET['mes']; include '../mes.php'; ?></title>
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
            include '../conexion.php';
						$menuMes = $_GET['menuMes'];
						$numMes = $_GET['numMes'];
            $id = $_GET['id'];
            echo '<div class="titMes2">Editar trámite</div>';
						echo '<div class="col-lg-5" id="arreglo">';
						      $registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE id=$id.");

									while ($reg = mysqli_fetch_array($registros)) {
                    echo '<form style="width:100%;background:none;box-shadow:none;" method="POST" action="accion/accion.php?op=2&id='.$reg['id'].'&menuMes='.$menuMes.'&ac=2">';
										echo 'Lugar<br>';
                    echo '<input type="text" name="lugar" value="'.$reg['lugar'].'"><br>';
										echo 'Empresa<br>';
                    echo '<input type="text" name="empresa" value="'.$reg['empresa'].'"><br>';
										echo 'Trámite<br>';
                    echo '<input type="text" name="tramite" value="'.$reg['tramite'].'"><br>';
										echo 'Comentario:<br>';
                    echo '<input type="text" name="comentario" value="'.$reg['comentario'].'"><br>';
                    echo 'Honorarios:<br>';
                    echo '<input type="text" name="honorarios" value="'.$reg['honorarios'].'"><br>';
										echo 'Timbres<br>';
                    echo '<input type="text" name="timbres" value="'.$reg['timbres'].'"><br>';
										echo 'Multas:<br>';
                    echo '<input type="text" name="multas" value="'.$reg['multas'].'"><br>';
										echo 'Boletos:<br>';
                    echo '<input type="text" name="boletos" value="'.$reg['boletos'].'"><br>';
                    echo "<a id='terminar' style='width:100%;margin-top:10px;' class='btn btn-danger' href='mes.php?menuMes=".$menuMes."&op=2'>Cancelar</a>";
										echo "<input type='submit' style='width:100%;' name='' value='Enviar' class='btn btn-success'>";
                    echo '</form>';
									}

					echo '
          </div>

					';
					 ?>
			 </div>
		</div>
	</div>
	</body>

</html>
<script type="text/javascript" src="../js/desplegable.js"></script>
<script type="text/javascript" src="../js/mostrar.js"></script>
