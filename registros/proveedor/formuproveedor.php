
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE PROVEEDOR</title>

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
    
      
        <center><h1>REGISTRO DE PROVEEDOR</h1></center>
        
     
         
            <form role="form" method="post" action="grabaproveedor.php"  enctype="multipart/form-data">
          <label for="detalle">Empresa Laboratorio</label>
          <input type="text" id="empresa" name="empresa" class="form-control">    
           <label for="detalle">Telefono</label>
          <input type="number" id="telefono" name="telefono" class="form-control">  
           <label for="detalle">Direccion</label>
          
          <input type="text" id="direccion" name="direccion" class="form-control">  

        <button type="submit" class="btn btn-block btn-info" value="submit" id="submit" name="submit">REGISTRAR</button>
      
      </form>
      </div>
  
    </body>
</html>