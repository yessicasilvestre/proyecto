<?php
/*
* Eliminar un producto del carrito
*/
session_start();
if(!empty($_SESSION['carr'])){
	$cart  = $_SESSION['carr'];
	
	if(count($cart)==1){ 
		unset($_SESSION['carr']); 
	}
	else{
		$newca = array();
		foreach($cart as $c){


			if($c['id_producto']!=$_GET['id']){
				$newca[] = $c;	
						
			}
		}
		$_SESSION['carr'] = $newca;
	}
}
print "<script>window.location='carrito.php';</script>";

?>

