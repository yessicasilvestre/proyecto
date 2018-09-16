<?php 
session_start();
include("../conexion.php");

$emp=$_SESSION['id_empleado'];
$dat=Date('Y-m-d');

if(!empty($_POST)){
$razon=$_POST['razon'];
$cons="insert into venta (id_cliente, id_empleado, fecha) values ('$razon','$emp','$dat') ";
$res=mysqli_query($con,$cons);
if($res){
$cart_id = $con->insert_id;
foreach($_SESSION['carr'] as $c){

$co="insert into detalle_venta (id_producto, id_venta, cantidad, costo) values (".$c['id_producto'].", $cart_id,".$c['costo_venta'].",".$_SESSION['cos'].")";
$resultado=mysqli_query($con,$co) or die (mysqli_error());

$sel="SELECT stock FROM producto
WHERE id_producto=".$c['id_producto']." ";
$resu=mysqli_query($con,$sel)or die (mysqli_error());
$reg=mysqli_fetch_array($resu);
$sto=$reg['stock'];
$prod=$sto-$c['costo_venta'];

$consu="UPDATE producto SET stock='$prod' WHERE id_producto=".$c['id_producto']." ";
$resu=mysqli_query($con,$consu)or die (mysqli_error());

}
unset($_SESSION['carr']);
}
print "<script>alert('Venta procesada exitosamente');window.location='formuventa.php';</script>";
}else{
	print "<script>alert('Venta no procesada ');window.location='formuventa.php';</script>";
}
?>