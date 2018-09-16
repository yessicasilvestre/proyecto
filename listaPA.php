<html>
<head>
	<title>Listado de paqutes</title>
      <link rel="stylesheet" type="text/css" href="css/estilos.css" />
 
         
    </head>
    <body>
<?php 
require("motor.php");
$consulta="Select p.idpaquete,e.nombreop,p.codigopa,p.origenpa,p.destinopa,p.fecha_salidapa,p.fecha_llegadapa,p.preciopa,p.descripcionpa,p.imagenpa,p.tipopa
 from paquete p
inner join operador e on p.operador_idoperador=e.idoperador";
$res=mysqli_query($con,$consulta);
while($reg=mysqli_fetch_array($res)){

    echo "<div class='limite'>
	<div class='container-login105'>
			<div class='wrap-login105'> ";
	echo "<h5>Operador</h5><h2>".$reg['nombreop']."</h2>";
	echo "<h5>Codigo</h5><h2>".$reg['codigopa']."</h2>";
	echo "<h5>Origen</h5><h2>".$reg['origenpa']."</h2>";
	echo "<h5>Destino</h5><h2>".$reg['destinopa']."</h2>";
	echo "<h5>Fecha de Salida</h5><h2>".$reg['fecha_salidapa']."</h2>";
	echo "<h5>Fecha de LLegada</h5><h2>".$reg['fecha_llegadapa']."</h2>";
	echo "<h5>Precio </h5><h2>$u$".$reg['preciopa']."</h2>";
	echo "<h5>Descripcion</h5><h2>".$reg['descripcionpa']."</h2>";
        echo "<h5>Tipo</h5><h2>".$reg['tipopa']."</h2>";
						
	echo "<div class='col-xs-5 fix col-md-4 single_blog_post floatleft'><div class='login100-pic js-tilt' data-tilt>
	<img aling='left' src='registros/paquete/vista/".$reg['imagenpa']."'></div></div></div>";
    

}
?>





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