<?php

require("../conexion.php");
$cod=$_GET['cod'];
      $consulta="DELETE FROM proveedor WHERE id_proveedor='$cod' ";
      $res=mysqli_query($con,$consulta);

  if($res){
    echo "<script>
    window.alert('registro eliminado con exito');
    window.location='listaproveedor.php';
    </script>";
  }
  else{
    echo "<script>
    window.alert('registro NO eliminado ');
    window.location='listaproveedor.php';
    </script>";
  }
 

       

       ?>


