
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE PAQUETES</title>
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
    
      
        <center><h1>REGISTRO DE PAQUETE</h1></center>
          <form role="form" method="post" action="grabaproducto.php" enctype="multipart/form-data">
        <label>Seleccione operador</label>
<select name="ope" class="form-control">
         <?php require ("../../motor.php");
         $consulta="select * from operador";
         $res=mysqli_query($con,$consulta);
         while($reg=mysqli_fetch_array($res)){
         ?>
        <option value=" <?php echo $reg[0];?>">
          <?php echo $reg[1]; ?></option>
          <?php  }
         ?>
          </select>
          <label >Codigo_Paquete</label>
          <input type="text" id="codigo" name="codigo" class="form-control">
          
        <label >Lugar de Origen</label>
          <input type="text" id="origen" name="origen" class="form-control">
          <label>Lugar de Destino</label>
          <input type="text" id="destino" name="destino" class="form-control">
          <label>fecha de llegada</label>
          <input type="date" id="llegada" name="llegada" step="1" min="2018-01-01" max="2020-01-01" value="2018-01-01"  class="form-control">
           <label>fecha de Salida</label>
          <input type="date" id="salida" name="salida" step="1" min="2018-01-01" max="2020-01-01" value="2018-01-01" " class="form-control">
          <label>Precio </label>
         <input type="number" name="precio" id="precio" class="form-control">
          <label>tipo </label>
         <input type="text" name="ti" id="ti" class="form-control">
         <label>Descripcion</label>
          <input type="text" id="des" name="des" class="form-control">
        <label>Imagen de referencia :</label>
    <input type="file" name="imagen" id="imagen" value="examinar" class="form-control">
       
        <button type="submit"  class="btn btn-block btn-info"  value="submit" id="submit" name="submit">REGISTRAR</button>
      </form>
</div>
    </body>
</html>