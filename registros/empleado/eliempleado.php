<?php

      require("../conexion.php");
      $cod=$_GET['cod'];
      $consulta="DELETE FROM empleado WHERE id_empleado='$cod' ";
      $res=mysqli_query($con,$consulta);

  if($res){
  	echo "
    <script>
  	window.alert('registro eliminado con exito');
  	window.location='listaempleado.php';
  	</script>";
  }
  else{
  	echo "
    <script>
  	window.alert('registro NO eliminado ');
  	window.location='listaempleado.php';
  	</script>";
  }

       

       ?>


