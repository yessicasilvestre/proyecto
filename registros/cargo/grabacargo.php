<?php 
include("../conexion.php");

$car = $_POST['cargo'];




$q="insert into cargo (cargo) values ('$car')";



$r=mysqli_query($con,$q)or die(mysql_error());

	?>
	<script>
	alert('Se registro');
	location.href='listacargo.php';
	</script>

	<?php 

 ?>

