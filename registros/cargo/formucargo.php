
<!DOCTYPE>
<html>
<head>

  
        <meta charset="utf-8">
        
        <title>REGISTRO DE CARGO</title>
         
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

    <center><h1>REGISTRO DE CARGO</h1></center>
      <form role="form" method="post" action="grabacargo.php">
     
          <label for="detalle">Cargo</label>
          <input type="text" id="cargo" name="cargo" class="form-control">  
<br>
        <button type="submit"  class="btn btn-block btn-info"  value="submit" id="submit" name="submit">REGISTRAR</button>
      </form>
      </div>
      
    </body>
</html>