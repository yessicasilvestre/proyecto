
<html>
<head>
	<title>Listado de ventas</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>



   <link rel="stylesheet" href="../cssmenu/styles.css">
       <?php include ("../seguridad.php");?>
         
    </head>
    <body>
<?php 
    		 session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>
<div class="container">
<div class="site-wrap">
	<center><h1>LISTA VENTA</h1></center>
	<input width="30%" class="form-control" id="myInput"  type="text" placeholder="Search..">

<table align="center" border='1' id="customers">
<thead>
		<tr align="center">

			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>CANTIDAD</th>
			<th>TOTAL</th>
		<th>FECHA</th>
		<th>RAZON SOCIAL</th>
		<th>NOMBRES EMPLEADO</th>
		<th>PATERNOS</th>
				</tr>
</thead>
	<tbody id="myTable">
<?php 
require("../conexion.php");
$consulta="select v.id_venta,p.nombre,p.descripcion,dv.cantidad,dv.costo,v.fecha,cl.razon_social,e.nombres,e.ap_paterno
    from venta v
    inner join empleado e on v.id_empleado=e.id_empleado
    inner join cliente cl on v.id_cliente=cl.id_cliente
    inner join detalle_venta dv on v.id_venta=dv.id_venta
    inner join producto p on dv.id_producto=p.id_producto";
    $res=mysqli_query($con,$consulta);		 
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['nombre']."</td>";
	echo "<td>".$reg['descripcion']."</td>";
	echo "<td>".$reg['cantidad']."</td>";
	echo "<td>".$reg['costo']."</td>";
	echo "<td>".$reg['fecha']."</td>";
	echo "<td>".$reg['razon_social']."</td>";
	echo "<td>".$reg['nombres']."</td>";
	echo "<td>".$reg['ap_paterno']."</td>";
	
	echo "</tr>";
	echo "</tr>";
}
?> 
</tbody>
			</table>
<a href="imprimeventa.php" class="btn btn-info">Imprimir</a>	
</div>
</div>

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
