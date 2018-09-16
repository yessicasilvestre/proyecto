<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include("../conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

           <link rel="stylesheet" href="../css/bootstrap.min.css">
   
        
         <link rel="stylesheet" href="../cssmenu/styles.css">
</head>
<body>
	<?php 
         session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>
<div class="site-wrap">

			<h1>Carrito</h1>
			<a href="formucompra.php" class="btn btn-default">Productos</a>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$produ ="select * from producto";
$res=mysqli_query($con,$produ);
if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
?>

<table align="center" border='1' id="customers">
<tr>
	<th>Cantidad</th>
	<th>Producto</th>
	<th>Precio Unitario</th>
	<th>Total</th>
	<th></th>
</tr>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
$total=0;
foreach($_SESSION['carrito'] as $c){
$produ="select * from producto where id_producto=".$c['id_producto'];
$res=mysqli_query($con,$produ);
while($reg=mysqli_fetch_array($res)){
	?>
<tr>
<th><?php echo $c['costo_compra'];?></th>
	<td><?php echo $reg['nombre']; ?></td>
	<td>$ <?php echo $reg['costo_compra']; ?></td>
	<td>$ <?php $costo=$c['costo_compra']*$reg['costo_compra']; 
	session_start();
	echo $costo;
	$total=$total+$costo;
	$_SESSION['costo']=$costo;?></td>
	<td style="width:260px;">
	<?php
	$found = false;
	foreach ($_SESSION['carrito'] as $c) {
	 if($c['id_producto']==$reg['id_producto']){ $found=true; break; }}
	?>
		<a href="delcarrito.php?id=<?php echo $c['id_producto']; ?>" class="btn btn-danger">Eliminar</a>
	</td>
</tr>
<?php }} ?>
<tr><th colspan="3">TOTAL COMPRA</th>
<th><?php echo $total; ?></th></tr>
</table>
<form class="form-horizontal" role="form" method="post" action="proceso.php">
  <div class="form-group">
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="proceso" name="proceso" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>


<?php }else{ 
	?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php }?>
<br><br>


		
</div>
</body>
</html>