<html>
<head>
	<title>Listado de clientes</title>

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
	
	<table align="center" border='1' id="customers">
		<center><h1>LISTA CLIENTES</h1></center>
		<tr align="center">
			<th>RAZON SOCIAL</th>
		<th>NIT o CI</th>
		<th>ELIMINAR</th>
		<th>MODIFICAR</th>
			</tr>

<?php 
require("../conexion.php");
$consulta="Select *from cliente";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['razon_social']."</td>";
	echo "<td>".$reg['ci_nit']."</td>";


	echo '<td><a class="btn btn-danger"
	<a href="elicliente.php?cod='.$reg['id_cliente'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-trash '></i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modicliente.php"?cod='.$reg['id_cliente'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-edit '></i></a>";
	echo "</td>";
	echo "</tr>";
	echo "</tr>";
}
?>
			</table>

</div>

      <script src="js/index.js"></script>
</body>
</html>