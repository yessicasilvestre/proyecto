<?php 
$con=mysqli_connect("localhost","root","","farmacia");
if($con){
mysqli_get_host_info($con);

}else{
	echo "error en la conexion";
	echo "error ".mysqli_connect_error();
}
date_default_timezone_set("America/La_Paz");
?>