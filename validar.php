<!DOCTYPE html>
<html>

<head>
	<title>Trámites</title>
	<?php include 'meta1.html'; ?>
</head>

<body>
	<div class="container-fluid" style="background:#222;background-repeat: repeat-y;height:auto !important;">
		<div class="main row">
				<?php include 'header0.php'; ?>
				<div class="col-lg-12"></div>
				<br><br>
				<?php
	        include 'conexion.php';
	        $mail = $_POST['mail'];
	        $pass = $_POST['pass'];
					$tipo = $_POST['tipo'];

	        $sql = mysqli_query($conexion, "SELECT * FROM login WHERE mail='".$mail."'");
	        if ($f2=mysqli_fetch_array($sql)) {
	          if ($pass==$f2['pass'] && $tipo==$f2['tipo'] && $tipo=='contador') {
	            echo '<div class="col-lg-4"></div>
										<div class="col-lg-4 iniSesion" style="text-align:center;">Bienvenido</div>
										<div class="col-lg-4"></div>';
	            echo '<script>location.href="index1.php?op=1"</script>';
	          } elseif (($pass==$f2['pass'] && $tipo==$f2['tipo'] && $tipo=='gestor')) {
							echo '<div class="col-lg-4"></div>
										<div class="col-lg-4 iniSesion" style="text-align:center;">Bienvenido</div>
										<div class="col-lg-4"></div>';
	            echo '<script>location.href="index2.php?op=2"</script>';
						} else {
								echo '<div class="col-lg-1"></div>
											<div class="col-lg-10 iniSesion" style="text-align:center;">
												<p>El correo o contraseña con incorrectos<br>
												<a style="text-decoration:none;" href="index.php">Intentar de nuevo</a>
												</p>

											</div>
											<div class="col-lg-1"></div>';
							}
	        }
	      ?>

			</div>
		</div>
	</body>

</html>
