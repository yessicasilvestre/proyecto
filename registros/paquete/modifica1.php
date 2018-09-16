<?php

require("../conexion.php");
$cod=$_GET['cod'];

if(isset($_POST['modificar'])){
  $var0=$_POST['nom'];
  $var1=$_POST['des'];
  $var2=$_POST['compra'];
  $var3=$_POST['venta'];
  $var4=$_POST['stock'];
  $var5=$_POST['fecha'];
  
  $consultam="UPDATE producto SET nombre='$var0',descripcion='$var1', costo_compra='$var2', costo_venta='$var3', stock='$var4',fecha='$var5' WHERE id_producto='$cod'; ";
    
  $resm=mysqli_query($con,$consultam);
if($resm){
    echo "
    <script>
    window.alert('registro modificado con exito');
    window.location='listaproducto.php';
    </script>";
  }
  else{
    echo "
    <script>
    window.alert('registro NO modificado ');
    window.location='listaproducto.php';
    </script>";
  }
}
       ?>