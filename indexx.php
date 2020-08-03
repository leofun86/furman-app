<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Furman Trámites</title>
		<link rel="stylesheet" type="text/css" href="css/madre.css">
		<link rel="stylesheet" href="bs/bootstrap.min.css">
		<link rel="stylesheet" href="bs/bootstrap-grid.css">
		<link rel="stylesheet" href="bs/bootstrap-reboot.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	</head>

	<body class="main row">
		<div class="container-fluid">
			<?php include 'header1.php'; ?>
			<br>

			<div>
				<div class="iniSesion"><p>Iniciar sesión</p></div>
				<form style ="padding:20px;" id="form" method="POST" action="validar.php">
					<div class="form-group">
						<label for="mail"><b>Correo:</b></label>
						<input type="mail" class="form-control" name="mail" placeholder="ej: hola@mail.com" required>
						<!-- <input type="mail" name="mail" pleceholder="Introduzca el correo" required> -->
					</div>
					<div class="form-group">
						<label for="contra"><b>Contraseña:</b></label>
						<input type="password" class="form-control" name="pass" required>
						<!-- <input type="password" name="pass" required> -->
					</div>
						<button type="submit" class="btn btn-default">Ingresar</button>
						<!--<input class="btn-danger" type="submit" value="Terminar">-->
				</form>
			</div>
				<!--<h3 id="registro">REGISTRARSE</h3>
				<div class="plegable">
					  <form style ="padding:20px;" id="form" method="POST" action="validar_reg.php?ac=1">

					    Correo<br>
					    <input type="mail" name="mail" required><br><br>
					    Contraseña<br>
					    <input type="password" name="pass" required><br><br>
					    <input id="terminar" type="submit" value="Terminar">

					  </form>
				</div>-->

		</div>
	</body>

</html>
<script type="text/javascript" src="js/desplegable.js"></script>
