<html>
<head>

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
<div class="container">
<div class="site-wrap">
	 <!-- <form role="form" class="form-horizontal">-->
<h1><center>LISTADO DE CARGO</center></h1>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table align="center" border='1' id="customers">
	<thead>
	<tr align="center">
		<th>ID</th>
		<th>CARGO</th>
		<th>ELIMINAR</th>
		<th>MODIFICAR</th>
	</tr>
	</thead>
	<tbody id="myTable">
	<?php
	require("../conexion.php");
	$consulta="select * from cargo";
	$res=mysqli_query($con,$consulta);
	while($reg=mysqli_fetch_array($res)){
		echo "<tr><align='center'>";
		echo "<td>".$reg['id_cargo']."</td>";
		echo "<td>".$reg['cargo']."</td>";
		?>
      <?php   
echo '<td><a class="btn btn-danger"
	<a href="elicargo.php?cod='.$reg['id_cargo'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-trash '></i></a>";
	echo "</td>";
	echo '<td><a class="btn btn-success"
	<a href="modicargo.php?cod='.$reg['id_cargo'].' 
	"class="btn btn-danger">';
	echo "<i class='glyphicon glyphicon-edit '></i></a>";
	echo "</td>";
	echo "</tr>";
   echo "</tr>";

  }
	?>
 </tbody>
</table>

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
