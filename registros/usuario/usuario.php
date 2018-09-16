<html >
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE USUARIO</title>
         <link rel="stylesheet" href="../css/bootstrap.min.css">
         <link rel="stylesheet" href="../cssmenu/styles.css">
       <link rel="stylesheet" href="../css/normalize.css">

         
    </head>
    <body >
<?php 
          session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>ç

 <div class="site-wrap">
        <center><h1>REGISTRO DE USUARIO</h1></center>

		<form id="formulario" name="formulario" method="post" action="grabarusuario.php">
<label>Empleado</label>
	<?php

          require ("../../motor.php");
         $consulta="select * from empleado order by ap_paterno asc";
         $res=mysqli_query($con,$consulta);
        echo "<select id='emp' name='emp' class='form-control'>";
          while($reg=mysqli_fetch_array($res)){
         echo "<option value=' ".$reg['id_empleado']." '> ".$reg['nombres']." ".$reg['ap_paterno']."</option>";
          }
        echo "</select>";
         ?>
<label>Usuario</label>
<input type="text" id="urs" name="urs" class="form-control">
<label>contraseña</label>
<input type="password" id="pas1" name="pas1" class="form-control">
<label>repita contraseña</label>
<input type="password" id="pas2" name="pas2" class="form-control">
<label>nivel</label>
<input type="text" id="ni" name="ni" class="form-control">
<label>estado</label>
<input type="text" id="estado" name="estado" class="form-control">
<button type="submit"  class="btn btn-block btn-info" value="submit" id="submit" name="submit">REGISTRAR</button>
		</form>

		<div>
			</body>
</html>