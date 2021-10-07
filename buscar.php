<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	
	<title>Index</title>
</head>
<body>
	<h1 class="mb-4">CREDITOS</h1>
	<div class="container col-sm-12 col-md-6 col-lg-6">	
		<form action="buscar.php" method="post">			
			<a class="" href="nuevo.php">NUEVO CREDITO</a>			
			<input type="text" name="buscar" class="">
			<input class="btn btn-info" type="submit" value="BUSCAR"><br>
		</form>
	

	<div align="center">
		<table class="table table-hover shadow mt-4  table-bordered">
			
			<tr>
				<th>NUMERO</th>
				<th>DESCRIPCION</th>
				<th>VALOR TOTAL</th>
				<th>MESES TOTALES DE LA DEUDA</th>
				<th>MESES RESTANTES</th>
				<th>FECHA DEL PRESTAMO</th>
				<th>OPCIONES</th>
			</tr>
			<?php 
			include('conexion.php');
			while($mostrar=mysqli_fetch_row($rta)){
				?>
				<tr>
					<td><?php echo $mostrar['0'] ?></td>
					<td><?php echo $mostrar['1'] ?></td>
					<td><?php echo $mostrar['2'] ?></td>
					<td><?php echo $mostrar['3'] ?></td>
					<td><?php echo $mostrar['4'] ?></td>
					<td><?php echo $mostrar['5'] ?></td>
					<td><a href="editar.php?
						id=<?php echo $mostrar['0'] ?> &
						descripcion=<?php echo $mostrar['1'] ?> &
						valor_Total=<?php echo $mostrar['2'] ?> &
						meses_Total=<?php echo $mostrar['3'] ?> &
						meses_Pendiente=<?php echo $mostrar['4'] ?> &
						fecha_Prestamo=<?php echo $mostrar['5'] ?>"><i class="fas fa-pen-square">EDITAR</i></a>
						<a href="eliminar.php? id=<?php echo $mostrar['0'] ?> ">ELIMINAR</a>
					</td>
				</tr>
				
				<?php
			}
			?>
			
		</table>
	</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>