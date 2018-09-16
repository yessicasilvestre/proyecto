<?php
# Cargamos la librería dompdf.
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
require("../conexion.php");
$consulta="Select *from empleado";
$res=mysqli_query($con,$consulta);
# Contenido HTML del documento que queremos generar en PDF.
$html='
<link rel="stylesheet" href="../cssmenu/styles.css">
<center><h1>LISTA EMPLEADOS</h1></center>
<table align="center" border="1" id="customers">
		
		<tr align="center">
			<th>cargo</th>
			<th>PATERNO</th>
					<th>MATERNO</th>
					<th>NOMBRES</th>
			<th>CI</th>
				<tH>DIRECCION</tH>
				
				<th>TELEFONO</th>
				
				<th>FECHA DE NACIMIENTO</th>
<th>GENERO</th>
	<th>INTERESES</th></tr>';

while($reg=mysqli_fetch_array($res)){
	$consul="select * from cargo";
         $resu=mysqli_query($con,$consul);
          while($regi=mysqli_fetch_array($resu)){
        	if($regi['id_cargo']==$reg['id_cargo']){
        		$cargo=$regi['cargo'];
        	}
          }
 $html.='<tr align="center">
 <td>'.$cargo.'</td>
	<td>'.$reg['ap_paterno'].'</td>
	<td>'.$reg['ap_materno'].'</td>
	<td>'.$reg['nombres'].'</td>
	<td>'.$reg['ci'].'</td>
	<td>'.$reg['direccion'].'</td>
	<td>'.$reg['telefono'].'</td>
	<td>'.$reg['fecha_nacimiento'].'</td>
	<td>'.$reg['genero'].'</td>
	<td>'.$reg['intereses'].'</td>';
}

$html.='</table>';
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("carta", "landscape");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('FicheroEjemplo.pdf');
?>