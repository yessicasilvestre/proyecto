<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
 <script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../cssmenu/styles.css">
       
         
    </head>
    <body >
    	<?php 
    		 session_start();
         if($_SESSION['nivel']==1){
         include ("../menu1.php");}
          if($_SESSION['nivel']==2){
         include ("../menu2.php");}
?>
<div class="site-wrap">
  <h1 align="center">BIENVENIDO</h1>
<center><video  width="800" controls>
  <source src="produce.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
</video></center>
  
</div>
  
    <script src="js/index.js"></script>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/1.jpg" alt="SM" style="width:100%;">
      </div>

      <div class="item">
        <img src="../images/2.jpg" alt="SUPERJUNIOR" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../images/3.jpg" alt="SHINee" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->


</body>
</html>
