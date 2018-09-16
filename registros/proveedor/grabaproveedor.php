<?php
include("../conexion.php");
$em=$_POST['empresa'];
$te=$_POST['telefono'];
$di=$_POST['direccion'];


$q="insert into proveedor (laboratorio,direccion,tel_cel) values ('$em','$di','$te')";

$r=mysqli_query($con,$q) or die(mysqli_error());
if($r){
	
	?>
	<script>
		alert('se registro');
		location.href='listaproveedor.php';
	</script>
	<?php
}
?>
