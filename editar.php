<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>EDITAR</title>
</head>
<body>
	<?php
	include('conexion.php');

	$id=$_GET['id'];

	$sql = "SELECT * FROM credito WHERE id='$id'";
	$respuesta = mysqli_query($cnx,$sql);
	$row= mysqli_fetch_array($respuesta);
	

	  ?>
	<div class="container col-sm-12 col-md-6 col-lg-6">
		<form action="sp_editar.php" method="post">
			<table class="table table-hover shadow mt-4 ">
			<h1>EDITAR</h1>
			<tr>
				<th>NUMERO</th>
				<td><input type="hidden" value="<?php echo $row['id'] ?>"></td>
			</tr>
			<tr>
				<th>DESCRIPCION</th>
				<td><input type="text" value="<?php echo $row['descripcion'] ?>"></td>
			</tr>
			<tr>
				<th>VALOR TOTAL</th>
				<td><input type="text" value="<?php echo $row['valor_Total']?>"></td>
			</tr>	
			<tr>
				<th>MESES TOTALES DE LA DEUDA</th>
				<td><input type="text" value="<?php echo $row['meses_Total']?>"></td>
			</tr>
			<tr>				
				<th>MESES RESTANTES</th>
				<td><input type="text" value="<?php echo $row['meses_Pendiente'] ?>"></td>		
			<tr>
			<tr>
				<th>FECHA DEL PRESTAMO</th>
				<td><input type="date" value="<?php echo $row['fecha_Prestamo']?>"></td>
			</tr>	
				<tr>
					<td></td>
					<td align="right">
						<input class="btn btn-primary" type="submit" value="ACTUALIZAR">
						<a class="btn btn-primary" href="index.php"> REGRESAR</a></td>
				</tr>
		</table>
		</form>
	</div>
	
</body>
</html>