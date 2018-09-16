<html>
<head>
	<title>ListaUsuario</title>
	
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
		<center><h1>LISTA USUARIO</h1></center>
		<tr align="center">
		<th>CI</th>
		<th>EMPLEADO</th>
		<th>USUARIO</th>
		<th>PASSWORD</th>
		<th>NIVEL</th>
		<th>ESTADO</th>

		</tr>

<?php 
require("../conexion.php");
$consulta="Select *from usuarios";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['ci']."</td>";
	echo "<td>".$reg['id_empleado']."</td>";
	echo "<td>".$reg['usuario']."</td>";
	echo "<td>".$reg['pasword']."</td>";
	echo "<td>".$reg['nivel']."</td>";
	echo "<td>".$reg['estado']."</td>";
	

	echo '<td><a class="btn btn-danger"
	<a href="eliproveedor.php?cod='.$reg['ci'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-trash '></i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modiproveedor.php?cod='.$reg['ci'].' "class="btn btn-danger">';
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