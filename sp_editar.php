<?php
	include('conexion.php');

	$id = $_POST['id'];
	$descripcion = $_POST['descripcion'];
	$valor_Total = $_POST['valor_Total'];
	$meses_Total = $_POST['meses_Total'];
	$meses_Pendiente = $_POST['meses_Pendiente'];
	$fecha_Prestamo = $_POST['fecha_Prestamo'];

	

	$sql="UPDATE credito SET 
	descripcion='$descripcion',
	valor_Total='$valor_Total',
	meses_Total='$meses_Total',
	meses_Pendiente='$meses_Pendiente',
	fecha_Prestamo='$fecha_Prestamo' WHERE id like $id '%' ";

	$rta=mysqli_query($cnx,$sql);
	
	if(!$rta){
		echo 'No se actualizo';
	}else{
		header('Location:index.php');
	}
	?>