<?php 
include("../conexion.php");

$rs = $_POST['razon'];
$ni= $_POST['nit'];

$q="INSERT INTO cliente SET razon_social='$rs',ci_nit='$ni'";


$r=mysqli_query($con,$q);

if($r){
	?>
	<script>
	alert('Se registro');
	//header)
	location.href='listacliente.php';
	</script>
	<?php 
}



 ?>

