<?php

require("../conexion.php");
$cod=$_GET['cod'];

if(isset($_POST['modificar'])){
  $var0=$_POST['emp'];
  $var1=$_POST['con'];
  $var2=$_POST['mai'];
  $var3=$_POST['tel'];
  $var4=$_POST['dir'];
  $consultam="UPDATE proveedor SET laboratorio='$var0', tel_cel='$var3', direccion='$var4' 
  WHERE id_proveedor='$cod'; ";
    
  $resm=mysqli_query($con,$consultam);
if($resm){
    echo "
    <script>
    window.alert('registro modificado con exito');
    window.location='listaproveedor.php';
    </script>";
  }
  else{
    echo "
    <script>
    window.alert('registro NO modificado ');
    window.location='listaproveedor.php';
    </script>";
  }
}
       ?>