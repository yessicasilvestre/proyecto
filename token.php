<?php 
require("motor.php");
session_start();
$idus = $_SESSION["idusuario"];
$token=md5(rand());
$_SESSION["token"]=$token;

mysqli_query($conexion,"UPDATE incos.usuario SET token='".$token."' WHERE idusuario='".$idus."' ");



?>