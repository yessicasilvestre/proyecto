
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE Cliente</title>
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
    <center><h1>REGISTRO DE CLIENTES</h1></center>
        
      <form role="form" method="post" action="grabacliente.php">
      
      
          
          <label for="detalle" >Razon social</label>
          <input type="text" id="razon" name="razon" class="form-control">
          
        <label for="ci">CI o NIT</label>
          <input type="number" id="nit" name="nit" class="form-control">
        
       
        <button type="submit" class="btn btn-block btn-info" value="submit" id="submit" name="submit">REGISTRAR</button>
      </form>
</div>
    </body>
</html>