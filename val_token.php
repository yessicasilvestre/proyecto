<?php
function validando_token(){
	require("motor.php");
	session_start();
	$t=$_SESSION["token"];
	$idus=$_SESSION["idusuario"];
	$query="SELECT * FROM incos.usuario WHERE idusuario='$idus'AND token = '$t'";
	  $resultado=mysqli_query($conexion ,$query);
    $filas=mysqli_num_rows($resultado);
    return $filas;

}
?>
