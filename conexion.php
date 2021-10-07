<?php 
$cnx=mysqli_connect("localhost","root","","deudas");

$sql="SELECT id,
			descripcion,
			valor_Total,
			meses_Total,			
			meses_Pendiente,
			fecha_Prestamo			
			FROM credito 
			ORDER BY id desc";
			
$rta=mysqli_query($cnx,$sql);

 ?>