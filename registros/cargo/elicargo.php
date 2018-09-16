<?php

      require("../conexion.php");
      $cod=$_GET['cod'];
      $consulta="DELETE FROM cargo WHERE id_cargo='$cod' ";
      $res=mysqli_query($con,$consulta);

  if($res){
  	echo "
    <script>
  	window.alert('registro eliminado con exito');
  	window.location='listacargo.php';
  	</script>";
  }
  else{
  	echo "
    <script>
  	window.alert('registro NO eliminado ');
  	window.location='listacargo.php';
  	</script>";
  }

       

       ?>


