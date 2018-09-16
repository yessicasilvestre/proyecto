<html>
<head>
	<title>Listado de paqutes</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/normalize.css">
   <link rel="stylesheet" href="../cssmenu/styles.css">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
         
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
	<br>
	<a href="imprimeproducto.php" class="btn btn-info">Imprimir</a>
	<center><h1>LISTA PAQUETES</h1></center>
	<input class="form-control" type="text" placeholder="Search.."><br>
	<table class="table table-bordered table-hover" border="7" width="20%" align="center" >
		
		<thead>
		<tr align="center">
			<th>OPERADOR</th>
			<th>CODIGO-PAQUETE</th>
			    <th>ORIGEN</th>
				<th>DESTINO</th>
				<th>FECHA-SALIDA</th>
				<th>FECHA-LLEGADA</td>
				<th>PRECIO</th>
				<th>DESCRIPCION</td>
				<th>IMAGEN</td>
					<th>TIPO</td></tr></thead>
	<tbody>

<?php 
require("../../motor.php");
$consulta="Select p.idpaquete,e.nombreop,p.codigopa,p.origenpa,p.destinopa,p.fecha_salidapa,p.fecha_llegadapa,p.preciopa,p.descripcionpa,p.imagenpa,p.tipopa
 from paquete p
inner join operador e on p.operador_idoperador=e.idoperador";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";
	echo "<td>".$reg['nombreop']."</td>";
	echo "<td>".$reg['codigopa']."</td>";
	echo "<td>".$reg['origenpa']."</td>";
	echo "<td>".$reg['destinopa']."</td>";
	echo "<td>".$reg['fecha_salidapa']."</td>";
	echo "<td>".$reg['fecha_llegadapa']."</td>";
	echo "<td>".$reg['preciopa']."</td>";
	echo "<td>".$reg['descripcionpa']."</td>";
	echo "<td><img width='35%' src='vista/".$reg['imagenpa']."'></td>";
    echo "<td>".$reg['tipopa']."</td>";


	echo '<td><a class="btn btn-danger"
	<a href="eliproducto.php?cod='.$reg['id_producto'].' 
	"class="btn btn-danger">';
	echo "<i class='fa fa-remove'>Eliminar</i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modiproducto.php"?cod='.$reg['id_producto'].' 
	"class="btn btn-danger">';
	echo "<i class='fa fa-edit'>Modificar</i></a>";
	echo "</td>";
	echo "</tr>";
}
?>
 </tbody>
			</table>

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