
<html>
<head>
  <title>MODIFICAREMPLEADO</title>

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

<div class="site-wrap">
       <h2><span class="label label-info">MODIFICAR REGISTRO DE EMPLEADOS</span></h2>
<table align="center" order='1' id="customers">
    <center><h1>DATOS</h1></center>
    <thead>
      <th>PATERNO</th>
      <th>MATERNO</th>
    <th>NOMBRES</th>
    <th>CI</td>
    <th>DIRECCION</th>
        <th>TELEFONO</th>    
      <th>FECHA DE NACIMIENTO</th>
      <th>INTERESES</th>

    </thead>
<?php 
require("../conexion.php");
$consulta="SELECT *FROM empleado";
$res=mysqli_query($con,$consulta);
while($fila=mysqli_fetch_array($res)){


  echo "<form method='POST' action=modifica1.php?cod=".$fila['id_empleado'].">
   <tr>

    <td><input type='text' id='appa' name='appa' class='form-control' value=".$fila["ap_paterno"]."></td>
     <td><input type='text' id='apma' name='apma' class='form-control' value=".$fila["ap_materno"]."></td>
  <td><input type='text' id='nom' name='nom' class='form-control' value=".$fila["nombres"]."></td>
  <td><input type='number' id='ci' name='ci' class='form-control' value=".$fila["ci"]."></td>
   <td><input type='text' id='dir' name='dir' class='form-control' value=".$fila["direccion"]."></td>
  <td><input type='number' id='tel' name='tel' class='form-control' value=".$fila["telefono"]."></td>

  <td><input type='date' name='fecha' step='1' min='1950-01-01' max='2010-01-01' value=".$fila["fecha_nacimiento"]."></td>
<td><input type='text' id='int' name='int' class='form-control' value=".$fila["intereses"]."></td>
  <td><div align=center>
  <button type='submit' value='submit' id='modificar' name='modificar'>MODIFICAR</button>
  </td> </tr>
  </form>";

}
?>

</table>
</div>
</body>
</html>