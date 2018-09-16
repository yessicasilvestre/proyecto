<html>
<head>
	<title>Listado de producto</title>
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
<?php 
    require("../conexion.php");
    $consulta="select v.id_compra,p.nombre,p.descripcion,dv.cantidad,dv.costo,v.fecha,e.nombres,e.ap_paterno
    from compra v
    inner join empleado e on v.id_empleado=e.id_empleado
    inner join detalle_compra dv on v.id_compra=dv.id_compra
    inner join producto p on dv.id_producto=p.id_producto";
    $res=mysqli_query($con,$consulta);		 
?>
<div class="container">
<div class="site-wrap">
	<center><h1>LISTA COMPRA</h1></center>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table align="center" border='1' id="customers">
<thead>
		<tr align="center">
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>CANTIDAD</th>
			<th>TOTAL</th>
		<th>FECHA</th>
		<th>NOMBRES EMPLEADO</th>
		<th>PATERNOS</th>
				</tr>

</thead>
<tbody id="myTable">
<?php 
require("../conexion.php");
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['nombre']."</td>";
	echo "<td>".$reg['descripcion']."</td>";
	echo "<td>".$reg['cantidad']."</td>";
	echo "<td>".$reg['costo']."</td>";
	echo "<td>".$reg['fecha']."</td>";
	
	echo "<td>".$reg['nombres']."</td>";
	echo "<td>".$reg['ap_paterno']."</td>";
	
	echo "</tr>";
	echo "</tr>";
}
?> 
</tbody>
			</table>
<a href="imprimecompra.php" class="btn btn-default">Imprimir</a>
</div></div>

      <script src="js/index.js"></script>
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>