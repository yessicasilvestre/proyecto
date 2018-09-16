<?php

require("../conexion.php");
$cod=$_GET['cod'];

if(isset($_POST['modificar'])){
  $var0=$_POST['car'];
  
  $consultam="UPDATE cargo SET cargo='$var0' 
  WHERE id_cargo='$cod'; ";
    
  $resm=mysqli_query($con,$consultam);


if($resm){
    echo "
    <script>
    window.alert('registro modificado con exito');
    window.location='listacargo.php';
    </script>";
  }
  else{
    echo "
    <script>
    window.alert('registro NO modificado ');
    window.location='listacargo.php';
    </script>";
  }
}
       ?>