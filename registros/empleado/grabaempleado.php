<?php 
include("../conexion.php");
$id=$_POST['cargo'];
$appa = $_POST['appa'];
$apma = $_POST['apma'];
$nom = $_POST['nombre'];
$ci= $_POST['ci'];
$dir= $_POST['dir'];
$tel= $_POST['tel'];
$fecha= $_POST['fecha'];
$genero= $_POST['genero'];
$int= $_POST['int'];

$q="insert into empleado (id_cargo, ap_paterno, ap_materno, nombres, ci, direccion, telefono, fecha_nacimiento, genero, intereses) 
values ('$id','$appa','$apma','$nom','$ci','$dir','$tel','$fecha','$genero','$int')";
$r=mysqli_query($con,$q);

if($r){
	?>
	<script>
	alert('Se registro');
	location.href='listaempleado.php';
	</script>
	<?php 
}


 ?>

