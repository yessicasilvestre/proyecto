<?php
include("../conexion.php");
$em=$_POST['emp'];
$urs=$_POST['urs'];
$pwd1=$_POST['pas1'];
$pwd2=$_POST['pas2'];
$ni=$_POST['ni'];
$es=$_POST['estado'];
if(strcmp($pwd1, $pwd2)==0){
	$ql="select *from usuarios where (usuario='$urs')";
	$rs1=mysqli_query($con,$ql);
	if(mysqli_num_rows($rs1)!=0){
		echo " 
		<script>
		alert('usuario existe');
		location.href='usuario.php';
		</script>";
	}
	else{
		$c="select * from empleado where id_empleado=$em";
		$rsc=mysqli_query($con,$c);
		$reg=mysqli_fetch_array($rsc);
		$carnet=$reg['ci'];
		echo $carnet;
		$pwd1=md5($pwd1);
		$q2="insert into usuarios (ci, id_empleado, usuario, pasword, nivel, estado) 
		values('$carnet','$em','$urs','$pwd1','$ni','$es' )";
		$rs2=mysqli_query($con,$q2);
		if($rs2){
			echo "<script>
			alert('se registro');
			location.href='usuario.php';
			</script>
			";}
		else{
			echo "<script>
			alert('no se registro');
			location.href='usuario.php';
			</script>
			";
		}
	}
}
else{
	echo "<script>
			alert('contraseñas diferentes');
			history.back();
			</script>";
}
?>