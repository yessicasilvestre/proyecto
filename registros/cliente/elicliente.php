<?php

require("../conexion.php");
$cod=$_GET['cod'];
      $consulta="DELETE FROM cliente WHERE id_cliente='$cod' ";
      $res=mysqli_query($con,$consulta);

  if($res){
  	echo "<script>
  	window.alert('registro eliminado con exito');
  	window.location='listacliente.php';
  	</script>";
  }
  else{
  	echo "<script>
  	window.alert('registro NO eliminado ');
  	window.location='listacliente.php';
  	</script>";
  }
 

       

       ?>


