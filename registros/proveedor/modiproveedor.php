
<html>
<head>
  <title>Listado de clientes</title>

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
       <h2><span class="label label-info">MODIFICAR REGISTRO DE PROVEEDORES</span></h2>
<table align="center" border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#000066'>
    <center><h1>DATOS</h1></center>
    <tr align="center">
      <td width='150' style='font-weight: bold'>EMPRESA</td>
      <td width='150' style='font-weight: bold'>CONTACTO</td>
    <td width='150' style='font-weight: bold'>MAIL</td>
      <td width='150' style='font-weight: bold'>TELEFONO</td>
    <td width='150' style='font-weight: bold'>DIRECCION</td>
    <td width='150' style='font-weight: bold'>LOGO</td>

    </tr>

<?php 
require("../conexion.php");
$consulta="SELECT *FROM proveedor";
$res=mysqli_query($con,$consulta);
while($fila=mysqli_fetch_array($res)){


  echo "<form method='POST' action=modifica1.php?cod=".$fila['id_proveedor'].">
   <tr align='center'>
  <td><input type='text' id='emp' name='emp' class='form-control' value=".$fila["empresa"]."></td>
  <td><input type='text' id='con' name='con' class='form-control' value=".$fila["contacto"]."></td>
  <td><input type='mail' id='mai' name='mai' class='form-control' value=".$fila["mail"]."></td>
  <td><input type='number' id='tel' name='tel' class='form-control' value=".$fila["telefono"]."></td>
  <td><input type='text' id='dir' name='dir' class='form-control' value=".$fila["direccion"]."></td>
  <td><img width='100' src='vista/".$fila['logo']."></td>
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