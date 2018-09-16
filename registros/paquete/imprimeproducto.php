<?php
# Cargamos la librería dompdf.
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
require("../conexion.php");
$consulta="Select *from producto";
$res=mysqli_query($con,$consulta);	 
# Contenido HTML del documento que queremos generar en PDF.
$html='
<body>
<link rel="stylesheet" href="../cssmenu/styles.css">
<link href="../css/bootstrap.min.css" rel="stylesheet"/>    
 <img src="../images/logo.png" align="right"  width="10px"><br> <br> <br> 
<h1>LISTA DE MEDICAMENTOS</h1>
     <br><br> <br> <br>
<table align="center" border="1" width="100%" id="customers" class="table table-bordered table-hover">
<thead>
		<tr align="center">
			<th>PROVEEDOR</th>
			<th>NOMBRE</th>
             <th>DESCRIPCION</th>
				<th>STOCK</th>
				<th>CODIGO</th>
				<th>COSTO COMPRA</th>
				<th>COSTO VENTA</th>
				<th>FECHA VENCIMIENTO</th>
				<th>IMAGEN</th></tr></thead>
	<tbody id="myTable">';

while($reg=mysqli_fetch_array($res)){
 $html.='<tr align="center">
	<td>'.$reg['id_proveedor'].'</td>
	<td>'.$reg['nombre'].'</td>
	<td>'.$reg['descripcion'].'</td>
	<td>'.$reg['stock'].'</td>
	<td>'.$reg['codigo'].'</td>
	<td>'.$reg['costo_compra'].'</td>
	<td>'.$reg['costo_venta'].'</td>
	<td>'.$reg['fecha_ven'].'</td>
	<td><img src="vista/'.$reg['imagen'].'" width="50" height="50"></td>';
}

$html.='</table><br><h3>Farmacia Miriams se encuentra ubicada : 
Avenida Periferica Nro 803,frente al Telefarico Naranja</h3></body>';
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("A4", "landscape");	

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('ReporteMedicamentos.pdf');
?>