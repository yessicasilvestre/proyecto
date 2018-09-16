<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="limiter">
	<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/encabezado/login.png);">
					<span class="login100-form-title-1">
						Consulte su vuelo
					</span>

				</div>

				<form class="login100-form validate-form"  action="login.php" method="post" id="sesion">
					<div class="wrap-input100 validate-input m-b-26" data-validate="campo obligatorio"  >
						<span class="label-input100">destino :</span>
						<input class="input100" autocomplete="off" type="text" name="destino" placeholder="ingrese ciudad o pais">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="campo obligatorio">
						<span class="label-input100">fecha de salida :</span>
						<input class="input100" type="date"  autocomplete="off"name="fecha" placeholder="fecha que desea partir">
						<span class="focus-input100"></span>
					</div>
		         <div class="wrap-input100 validate-input m-b-18" data-validate="campo obligatorio">
						<span class="label-input100">Email :</span>
						<input class="input100" type="email"  autocomplete="off" name="email" placeholder="Correo electronico">
						<span class="focus-input100"></span>
					</div>
			<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							solicitar informe de vuelos
						</button>
						
					</div>

				</form>
					<h1><span>despues de llenar los datos, le llegara un correo electronico con todos los vuelos disponibles y los horarios en tiempo real</h1></span>
			</div>

		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>