<?php 
session_start();
include("../conexion.php");

$emp=$_SESSION['id_empleado'];
$dat=Date('Y-m-d');

if(!empty($_POST)){
$cons="insert into compra (id_empleado, fecha) values ('$emp','$dat') ";
$res=mysqli_query($con,$cons);
if($res){
$cart_id = $con->insert_id;

foreach($_SESSION['carrito'] as $c){

$co="insert into detalle_compra (id_producto, id_compra, cantidad, costo) values (".$c['id_producto'].", $cart_id,".$c['costo_compra'].",".$_SESSION['costo'].")";
$resultado=mysqli_query($con,$co) or die (mysqli_error());

}
unset($_SESSION['carrito']);
}
print "<script>alert('Venta procesada exitosamente');window.location='formucompra.php';</script>";
}else{
	print "<script>alert('Venta no procesada ');window.location='formucompra.php';</script>";
}

?>