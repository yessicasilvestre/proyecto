<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <link rel="shortcut icon" href="../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="../css/tabstyles.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/plugins/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
<title>detour</title>
  </head>
  <body class="red">
 <header role="banner" class="encabezado">
            <div class="barra-encabezado">
                <a href="tel:(+591 - 2) - 2361626" class="telefono"><div class="glyphicon glyphicon-phone-alt"></div>(+591 - 2) - 2361626</a> &nbsp;&nbsp;&nbsp;
                  <a href="fax:511 996 314698" class="telefono"><div class="glyphicon glyphicon-envelope"></div>detoursrl@gmail.com</a>&nbsp;&nbsp;&nbsp;
                <ul class="redes-sociales">&nbsp;&nbsp;&nbsp;
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-facebook"> </a></li>

                </ul>
                <a href="loginpri.php" >iniciar sesion </a>
            </div>
        </div>
        <br>
    </header> 
    <div  class="barra-media">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="../../images/encabezado/IATA.png"   style="width:5%;">
  <img src="../../images/encabezado/ASTA.png"     style="width:5%;">
 <img src="../../images/encabezado/ABAVYT.png"   style="width:5%;">
  <img src="../../images/encabezado/COTAL.png"   style="width:4%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="../../images/encabezado/logode.png"  style="width:10%;">
      <span>!!! PONIENDO EL MUNDO A TU ALCANCE!!!</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      </div>

<h1>Usuario:
                                  <?php
include("../../motor.php");
$pro=$_POST['pro'];
$canti=$_POST['cantidad'];
$costo=$_POST['costo'];
session_start();
$emp=$_SESSION['nombre'];
$empo=$_SESSION['id_empleado'];
$dat=Date('Y-m-d');
echo $emp; 
?></h1><br><br>
  <div id='cssmenu'>
    <ul>
      <li><a href='../../cerrar.php'>CERRAR SESION</a></li>
 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">CLIENTE</a>
                            <ul class="dropdown-menu">
                                <li><a href="../cliente/formu.php">registar clientes</a></li>
                                 <li><a href="../cliente/listacliente.php">lista clientes</a></li>
 </li>
                    </ul>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">CARGO</a>
                            <ul class="dropdown-menu">
                                <li><a href="../cargo/formucargo.php">registra cargo </a></li>
                                 <li><a href="../cargo/listacargo.php">lista cargo</a></li>
                                
                        </li>
                    </ul>
                         </ul>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">PAQUETE</a>
                            <ul class="dropdown-menu">
                                <li><a href="../paquete/registrarpaquete.php">registra paquete </a></li>
                                 <li><a href="../paquete/listapaquete.php">lista ppaquete</a></li>
                                
                        </li>
                    </ul>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">USUARIO</a>
                            <ul class="dropdown-menu">
                                <li><a href="../usuario/usuario.php">registra usuario </a></li>
                                 <li><a href="../usuario/listausuario.php">lista de usuario</a></li>
                                
                        </li>
                    </ul>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">OPERADOR</a>
                            <ul class="dropdown-menu">
                                <li><a href="../compra/formucompra.php">registra compra </a></li>
                                 <li><a href="../compra/listacompra.php">lista de compras</a></li>
                                
                        </li>
                    </ul>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">OFERTAS</a>
                            <ul class="dropdown-menu">
                                <li><a href="../ventas/registrarventas.php">registra ventas </a></li>
                                 <li><a href="../ventas/listaventas.php">lista de ventas</a></li>
                                
                        </li>
                    </ul>
      <li><a href='../index.php'>INICIO</a></li>

                </div></div>
       <div class="main">
            
      <!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  <script src="js/bootstrap.js" type="text/javascript"></script>  
  <script src="js/jquery-min.js"></script>
  <script src="js/bootstrap.js"></script>   
    <script src="js/cbpFWTabs.js"></script>
    <script src="js/ytmenu.js"></script>
    <script>

      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
    </script>
  </body>
</html>