<!DOCTYPE html>
<html>

<head>
	<title>Trámites</title>
	<?php include 'meta1.html'; ?>
</head>

<body>
	<div class="container-fluid" style="background-repeat: repeat-y;height:auto !important;">
		<div class="main row">
			<?php include "header0.php"; ?>

			<div class="container">

				<form style ="padding:20px;margin-top:3%;" class="form" id="form" method="POST" action="validar.php">
					<center><p>Iniciar sesión</p></center>
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
					<div class="form-group">
						<label for="contra"><b>Tipo de usuario:</b></label>
						<select class="form-control" name="tipo" required>
							<option value="elegir">Elegir</option>
							<option value="contador">Contador</option>
							<option value="gestor">Gestor</option>
						</select>
						<!-- <input type="password" name="pass" required> -->
					</div>
						<button type="submit" class="btn btn-success ingresar">Ingresar</button>
						<!--<input class="btn-danger" type="submit" value="Terminar">-->
				</form>
			</div>
		</div>
	</div>
</body>
</html>
