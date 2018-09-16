<?php 
include("../../motor.php");
$ope=$_POST['ope'];
$co=$_POST['codigo'];
$ori = $_POST['origen'];
$desti= $_POST['destino'];
$lle= $_POST['llegada'];
$sa= $_POST['salida'];
$precio= $_POST['precio'];
$des= $_POST['des'];

$a=$_FILES['imagen']['name'];
$b=$_FILES['imagen']['tmp_name'];
$c=$_FILES['imagen']['size'];

$ti= $_POST['ti'];
$q="INSERT INTO `farmacia`.`paquete` SET `operador_idoperador`='$ope',`codigopa`='$co',`origenpa`='$ori',`destinopa`='$desti',`fecha_salidapa`='$sa',`fecha_llegadapa`='$lle',`preciopa`='$precio',`descripcionpa`='$des',tipopa='$ti',`imagenpa`='$a';";
$r=mysqli_query($con,$q);

if($r){
	@copy ($b,"vista/".$a);
	?>
	<script>
	alert('Se registro');
	location.href='listapaquete.php';
	</script>
	<?php 
}
else{
	?>
	<script>
	alert('registro No valido');
	location.href='registrarpaquete.php';
	</script>
	<?php 
}

 ?>

