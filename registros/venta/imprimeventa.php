<?php
# Cargamos la librería dompdf.
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
require("../conexion.php");
    $consulta="select v.id_venta,p.nombre,p.descripcion,dv.cantidad,dv.costo,v.fecha,cl.razon_social,e.nombres,e.ap_paterno
    from venta v
    inner join empleado e on v.id_empleado=e.id_empleado
    inner join cliente cl on v.id_cliente=cl.id_cliente
    inner join detalle_venta dv on v.id_venta=dv.id_venta
    inner join producto p on dv.id_producto=p.id_producto";
    $res=mysqli_query($con,$consulta);		 
# Contenido HTML del documento que queremos generar en PDF.
$html='
<style> 
body{
        background-image: url(../images/farmacia.png);
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment:fixed;
        }
      </style>
<link rel="stylesheet" href="../cssmenu/styles.css">
<center><h1>LISTA COMPRA</h1></center>
<table align="center" border="1" id="customers">
<thead>
		<tr align="center">
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>CANTIDAD</th>
			<th>TOTAL</th>
		<th>FECHA</th>
		<th>RAZON SOCIAL</th>
		<th>NOMBRES EMPLEADO</th>
		<th>PATERNOS</th>
				</tr>

</thead>
<tbody id="myTable">';

while($reg=mysqli_fetch_array($res)){
 $html.='<tr align="center">
	<td>'.$reg['nombre'].'</td>
	<td>'.$reg['descripcion'].'</td>
	<td>'.$reg['cantidad'].'</td>
	<td>'.$reg['costo'].'</td>
	<td>'.$reg['fecha'].'</td>
	<td>'.$reg['razon_social'].'</td>
	<td>'.$reg['nombres'].'</td>
	<td>'.$reg['ap_paterno'].'</td>
	</tr>
	</tr>';
}

$html.='</table>';
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
$mipdf ->stream('farmaciaMiriams.pdf');
?>