<!DOCTYPE html>
<html>
<head>
	<title>detour</title>
</head>
<body>
<?php 
	include("../menu.php");
?>
<div class="container">
	<div class="row">
	</div>
	<div class="col-md-4">
	</div>	
	<div class="col-md-4">
		<h1>REGISTRO USUARIOS</h1>
		<form id="formulario" name="formulario" method="post" action="formulario.php" enctype="multipart/form-data" />
		
			 </SELECT>			
			<br><br>
			<label><h5>USUARIO:</h5></label>
			<input type="text" id="usr" name="usr" class="form-control">
			<br><br>
			<label><h5>CONTRASEÑA:</h5></label>
			<input type="number" id="pas1" name="pas1" class="form-control" >
			<br><br>
			<label><h5>REPITA LA CONTRASEÑA:</h5></label>
			<input type="number" id="pas2" name="pas2" class="form-control" >
			<br><br>
			<label><h5>NIVEL:</h5></label>
			<select type="number" id="nivel" name="nivel" class="form-control" >
				<option value="1">Administrador</option>
				<option value="2">Secretaria</option>
				<option value="3">Usuario</option>
			</select>
			<br><br>
			<label><h5>ESTADO:</h5></label>
			<select type="text" id="estado" name="estado" class="form-control" >
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select>
			<br><br>
			<input type="submit" id="boton" name="registarEmpleado" value="Registarse" >
		</form>
	

</body>
</html>