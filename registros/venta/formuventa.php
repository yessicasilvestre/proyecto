<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include("../conexion.php");
?>
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE VENTA</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
           <link rel="stylesheet" href="../cssmenu/styles.css">
         <link rel="stylesheet" href="../css/normalize.css">
         
    </head>
    <body>
<?php 
         session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>
<?php include ("../seguridad.php");?>
<div class="site-wrap">
    
    <center><h1>VENTA</h1></center>
    <a href="carrito.php" class="btn btn-primary">Ver Carrito</a>

  <table align="center" border='1' id="customers">
    <tr align="center">
      <th>PRODUCTO</th>
      <th>COSTO</th>
      <th>CANTIDAD</th>
        </tr>

<?php 
include("../conexion.php");

$consulta="Select *from producto";
$res=mysqli_query($con,$consulta);
        

while($reg=mysqli_fetch_array($res)){
  echo "<tr align='center'>";
  echo "<td>".$reg['nombre']."</td>";
  echo "<td>".$reg['costo_venta']."</td>";
  $found=false;
if(isset($_SESSION['carr']))
{
 foreach ($_SESSION['carr'] as $c) {
  if($c['id_producto']==$reg['id_producto']){ 
    $found=true; 
    break; 
  }}}
  if($found){
  echo  "<td style='width:360px'><a href='carrito.php' class='btn btn-info'>Agregado</a></td>";}
  else{
    echo "<form class='form-inline' method='post' action='addcart.php'>
    <input type='hidden' name='id' id='id' value=".$reg['id_producto'].">";
    echo "<td><input type='number' id='q' name='q' value='1' style='width:100px;'  min='1' max=".$reg['stock']." class='form-control' placeholder='Cantidad'></td>";
      echo "<td style='width:360px'>";
  
  echo "<button type='submit' class='btn btn-primary'>Agregar al carrito</button></form>";
}
 echo "</td>";
  echo "</tr>";
}
?>
      </table>

</div>
<!-- <a name="lista">
<div class="site-wrap">
  
  <table align="center" border='1' id="customers">
    <center><h1>COMPRAS POR FECHA Y EMPLEADO</h1></center>
    <tr align="center">
      <th>EMPLEADO</th>
      <th>FECHA</th>
    <th>TOTAL</th>
     
        </tr>

<?php 
/*require("../conexion.php");
$consulta="Select *from detalle_compra";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
  echo "<tr align='center'>";
  echo "<td>".$reg['id_compra']."</td>";
  echo "<td>".$reg['cantidad']."</td>";
  echo "<td>".$reg['costo']."</td>";
  echo '<td><a class="btn btn-danger"
  <a href="elicompra.php?cod='.$reg['id_compra'].' 
  "class="btn btn-danger">';
  echo "<i class='glyphicon glyphicon-trash '></i></a>";
  echo "</td>";
  echo '<td><a class="btn btn-success"
  <a href="modicompra.php"?cod='.$reg['id_compra'].' 
  "class="btn btn-danger">';
  echo "<i class='glyphicon glyphicon-edit '></i></a>";
  echo "</td>";
  echo "</tr>";
  echo "</tr>";
}*/
?>


      </table>
</a>
</div>-->
    </body>
</html>