<?php

require("../conexion.php");
$cod=$_GET['cod'];
      $consulta="DELETE FROM usuarios WHERE ci='$cod' ";
      $res=mysqli_query($con,$consulta);

  if($res){
    echo "<script>
    window.alert('registro eliminado con exito');
    window.location='listausuario.php';
    </script>";
  }
  else{
    echo "<script>
    window.alert('registro NO eliminado ');
    window.location='listausuario.php';
    </script>";
  }
 

       

       ?>


