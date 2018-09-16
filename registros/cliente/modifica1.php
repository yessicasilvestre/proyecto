<?php

require("../conexion.php");
$cod=$_GET['cod'];

if(isset($_POST['modificar'])){
  $var0=$_POST['raz'];
  $var1=$_POST['nit'];
  
  $consultam="UPDATE cliente SET razon_social='$var0',ci_nit='$var1'
  WHERE id_cliente='$cod'; ";
    
  $resm=mysqli_query($con,$consultam);
if($resm){
    echo "
    <script>
    window.alert('registro modificado con exito');
    window.location='listacliente.php';
    </script>";
  }
  else{
    echo "
    <script>
    window.alert('registro NO modificado ');
    window.location='listacliente.php'
    </script>";
  }
}
       ?>