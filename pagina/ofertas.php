<!DOCTYPE html>
<html>
<head>
	<title>detour</title>
</head>
<body>
<?php 
session_start();
if($_SESSION['id_usuario']==1){
	include("../menu1.php");
}else
{
	include("../menu2.php");
}
?>






</body>
</html>