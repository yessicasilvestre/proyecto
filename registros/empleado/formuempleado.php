
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE EMPLEADO</title>
        <link rel="stylesheet" href="../cssmenu/styles.css">
         <link rel="stylesheet" href="../css/normalize.css">
            <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
<?php 
          session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>
<div class="site-wrap">
  
        <center><h1>REGISTRO DE EMPLEADO</h1></center>

          
              <form role="form" method="post" action="grabaempleado.php">
      
          <label for="detalle">Apellido Paterno</label>
          <input type="text" id="appa" name="appa" class="form-control">
          <label for="detalle">Apellido Materno</label>
          <input type="text" id="apma" name="apma" class="form-control">
          <label for="detalle">Nombres</label>
          <input type="text" id="nombre" name="nombre" class="form-control">
          <label for="ci">CI</label>
          <input type="number" id="ci" name="ci" class="form-control">
          <label for="ci">Direccion</label>
          <input type="text" id="dir" name="dir" class="form-control">
          <label for="ci">Telefono</label>
          <input type="number" id="tel" name="tel" class="form-control">
          <label for="fecha">Fecha de Nacimiento</label>
          <input type="date" name="fecha" step="1" min="1950-01-01" max="2010-01-01" value="1950-01-01" class="form-control">
          <label for="ci">Genero</label>
          <input type="radio" id="genero" name="genero" value="M" >Masculino
          <input type="radio" id="genero" name="genero" value="F" >Femenino
          
          <label for="ci">Intereses</label>
          <input type="text" id="int" name="int" class="form-control">

          <label for="ci">Cargo</label>
          <?php

          require ("../../motor.php");
         $consulta="select * from cargo";
         $res=mysqli_query($con,$consulta);
        echo "<select id='cargo' name='cargo' class='form-control'>";
          while($reg=mysqli_fetch_array($res)){
         echo "<option value=' ".$reg['id_cargo']." '> ".$reg['cargo']."</option>";
          }
        echo "</select>";
         ?>
        
       
        <button type="submit" class="btn btn-block btn-info" value="submit" id="submit" name="submit">REGISTRAR</button>
      </form>
</div>
    </body>
</html>