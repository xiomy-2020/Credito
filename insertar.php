<?php
	include('conexion.php');
	$descripcion=$_POST['descripcion'];
	$valor_Total=$_POST['valor_Total'];
	$meses_Total=$_POST['meses_Total'];	
	$meses_Pendiente=$_POST['meses_Pendiente'];
	$fecha_Prestamo=$_POST['fecha_Prestamo'];

		
	$sql="INSERT INTO credito (descripcion, valor_Total, meses_Total, meses_Pendiente, fecha_Prestamo)
	VALUES('$descripcion','$valor_Total','$meses_Total','$meses_Pendiente','$fecha_Prestamo') ";

	$rta=mysqli_query($cnx,$sql);
	if(!rta){
		echo 'No se inserto nuevo registro';
	}else{
		header('Location:index.php');
	}
	?>