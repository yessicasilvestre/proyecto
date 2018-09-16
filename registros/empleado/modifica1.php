<?php

require("../conexion.php");
$cod=$_GET['cod'];

if(isset($_POST['modificar'])){
$id=$_POST['cargo'];
$appa = $_POST['appa'];
$apma = $_POST['apma'];
$nom = $_POST['nom'];
$ci= $_POST['ci'];
$dir= $_POST['dir'];
$tel= $_POST['tel'];
$fecha= $_POST['fecha'];
$genero= $_POST['genero'];
$int= $_POST['int'];
  
  $consultam="UPDATE empleado SET  ap_paterno='$appa', ap_materno='$apma', nombres='$nom', ci='$ci', direccion='$dir', telefono='$tel', fecha_nacimiento='$fecha', genero='$genero', intereses='$int'
  WHERE id_empleado='$cod'; ";
    
  $resm=mysqli_query($con,$consultam);


if($resm){
    echo "
    <script>
    window.alert('registro modificado con exito');
    window.location='listaempleado.php';
    </script>";
  }
  else{
    echo "
    <script>
    window.alert('registro NO modificado ');
    window.location='listaempleado.php';
    </script>";
  }
}
       ?>