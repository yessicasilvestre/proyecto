<?php 
session_start();
$user = $_POST["usuario"];
$pasw = $_POST["password"];
$pasw=md5($pasw);


require("motor.php");
$consulta="SELECT * FROM usuarios WHERE ( usuario='$user' and pasword='$pasw' )";

$rs=mysqli_query($con,$consulta);
if(mysqli_num_rows($rs)!=0)
{ 
	session_start();
	$_SESSION['ingreso']='si';
	if($r=mysqli_fetch_array($rs)){
			$_SESSION["id_empleado"]=$r['id_empleado'];
			$_SESSION["nombre"]=$r['usuario'];
			$_SESSION["nivel"]=$r['nivel'];

	}
// se redirecciona a pagina1.php
header("Location: pagina/ofertas.php");

}
else{
	// en caso de error retorna a ingreso.php y envia una bandera pra indicar q el logeo fue incorrecto

	header("Location: index.php?error=1");
	
	}

 ?>
