<html>
<head>
	<title>Lista Proveedor</title>
	
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

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
	<table align="center" border='1'  id="customers">
		<center><h1>LISTA PROVEEDOR</h1></center>
		<tr align="center">
		<th>EMPRESA</th>
		<th>TELEFONO</th>
		<th>DIRECCION</th>

		</tr>

<?php 
require("../conexion.php");
$consulta="Select *from proveedor";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['laboratorio']."</td>";
	echo "<td>".$reg['tel_cel']."</td>";
	echo "<td>".$reg['direccion']."</td>";

	echo '<td><a class="btn btn-danger"
	<a href="eliproveedor.php?cod='.$reg['id_proveedor'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-trash '></i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modiproveedor.php?cod='.$reg['id_proveedor'].' "class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-edit '></i></a>";
	echo "</td>";
	echo "</tr>";
	echo "</tr>";



}
?>
</table>
</div>
</body>
</html>