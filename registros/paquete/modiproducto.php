
<html>
<head>
  <title>MODIFICARPRODUCTO</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
       <h2><span class="label label-info">MODIFICAR REGISTRO DE PRODUCTOS</span></h2>
<table align="center" border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#000066'>
    <center><h1>DATOS</h1></center>
    <tr align="center">
      <td width='150' style='font-weight: bold'>NOMBRE</td>
      <td width='150' style='font-weight: bold'>DESCRIPCION</td>
       <td width='150' style='font-weight: bold'>COSTO COMPRA</td>
        <td width='150' style='font-weight: bold'>COSTO VENTA</td>
    <td width='150' style='font-weight: bold'>STOCK</td>
      <td width='150' style='font-weight: bold'>FECHA</td>

    </tr>
<?php 
require("../conexion.php");
$consulta="SELECT *FROM producto";
$res=mysqli_query($con,$consulta);
while($fila=mysqli_fetch_array($res)){


  echo "<form method='POST' action=modifica1.php?cod=".$fila['id_producto'].">
   <tr align='center'>
  <td><input type='text' id='nom' name='nom' class='form-control' value=".$fila["nombre"]."></td>
  <td><input type='text' id='des' name='des' class='form-control' value=".$fila["descripcion"]."></td>
  <td><input type='text' id='compra' name='compra' class='form-control' value=".$fila["costo_compra"]."></td>
  <td><input type='text' id='venta' name='venta' class='form-control' value=".$fila["costo_venta"]."></td>
  <td><input type='number' id='stock' name='stock' class='form-control' value=".$fila["stock"]."></td>
  <td><input type='date' name='fecha' step='1' min='2018-01-01' max='2019-01-01' value=".$fila["fecha"]."></td>
  </tr>
    <tr>
    <td colspan='6'><div align=center>
  </td>
  </tr>
     <tr>
  <td colspan='6'><div align=center>
  <input type='submit' name='modificar' value='modificar'>
  </td>
  </form>
  </tr>";

}
?>

</table>
</div>
</body>
</html>