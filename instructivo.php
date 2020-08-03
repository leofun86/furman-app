
		<div class="container-fluid" style="height:100%;">
			<div class="main row" style="height:100%;">

				<?php
					$op= $_GET['op'];
					if ($op == 1) {
						include 'header1_1.php';
						include 'menuMeses1_1.php';
					} else {
						include 'header2_1.php';
						include 'menuMeses2_1.php';
					}
				?>

				<div class="col3" style="text-align:left;color:rgb(255, 255, 255, 0.8);">
					<script type="text/javascript">
						$(document).ready(function() {
							$(".link").click(function() {
								$(".txt").slideToggle();
							});
						});
					</script>
					<article class="articulo">
						<h1>¿Cómo se hace?</h1>
						<br>
						<h3 class="btn btn-success">IMM</h3><br>
						<a href="http://www.montevideo.gub.uy/sites/default/files/biblioteca/4372-s-mb-od-r05v5instructivoparacompletarelformulariodedisposicionfinalderesiduos.pdf" target="_blank">- Formulario de solicitud  para disposición final de residuos.</a>
						<br><br>
						<h3 class="btn btn-primary">DGI</h3><br>
						<a href="#" class="link">- Convenios: requisitos.</a>
						<p class="txt">
							- Formulario 2/015 completo con detalle de deuda mensual y por impuestos firmado por representante en duplicado.<br>
							- Boleto de pago con entrega inicial mínima del 20% de los impuestos adeudados<br>
							Fotocopia de cedula de identidad del solicitante.<br><br>

							- EN EL CASO QUE QUIERA CONVENIR LOS TRIBUTOS DEL MES Y NO HAYA AGENDA DISPONIBLE ANTES DE SU VENCIMIENTO, DIRIGIRSE EN FORMA PRESENCIAL AL DEPARTAMENTO CONVENIOS 5º PISO, DGI<br><br>

							Se recuerda que:<br>
							- La información en RUT debe estar actualizada, así como estar al día con la presentación de las declaraciones juradas.<br>
							- La solicitud se presentara en las oficinas de la DGI correspondiente al domicilio constituido
						</p>
				</article>
				</div>
			</div>
		</div>
