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

<center><h1>LISTA EMPLEADOS</h1></center>
<div class="container">
<div class="site-wrap">
	<input class="form-control" id="myInput" type="text" placeholder="Search..">
	
	<table align="center" border='1' id="customers">
		
		<thead>
			<th>cargo</th>
			<th>PATERNO</th>
					<th>MATERNO</th>
					<th>NOMBRES</th>
			<th>CI</th>
				<tH>DIRECCION</tH>
				
				<th>TELEFONO</th>
				
				<th>FECHA DE NACIMIENTO</th>
<th>GENERO</th>
	<th>INTERESES</th></thead>
<tbody id="myTable">	
<?php 
require("../conexion.php");
$consulta="Select *from empleado";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){
	echo "<tr align='center'>";


          require ("../conexion.php");
         $consul="select * from cargo";
         $resu=mysqli_query($con,$consul);
          while($regi=mysqli_fetch_array($resu)){
        	if($regi['id_cargo']==$reg['id_cargo']){
        		$cargo=$regi['cargo'];
        	}
          }
        
	echo "<td>".$cargo."</td>";
	echo "<td>".$reg['ap_paterno']."</td>";
	echo "<td>".$reg['ap_materno']."</td>";
	echo "<td>".$reg['nombres']."</td>";
	echo "<td>".$reg['ci']."</td>";
	echo "<td>".$reg['direccion']."</td>";
	echo "<td>".$reg['telefono']."</td>";
	echo "<td>".$reg['fecha_nacimiento']."</td>";
	echo "<td>".$reg['genero']."</td>";
	echo "<td>".$reg['intereses']."</td>";
	echo '<td><a class="btn btn-danger"
	<a href="eliempleado.php?cod='.$reg['id_empleado'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-trash '></i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modiempleado.php"?cod='.$reg['id_empleado'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-edit '></i></a>";
	echo "</td>";
	echo "</tr>";

}
?></tbody>
			</table>
	<a href="imprime.php" class="btn btn-info">Imprimir</a>		
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