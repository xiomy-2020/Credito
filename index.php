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
	<div class="container row">	
		<div class="col-md-3">
			<form action="index.php" method="post">			
				<a  href="nuevo.php">NUEVO CREDITO</a>			
				<input class="mt-3 mb-2" type="text" name="buscar" class="">
				<input class="btn btn-info" type="submit" value="BUSCAR"><br>
			</form>
		</div>

	<div class="col-md-8" align="center">
		<table class="table table-hover shadow mt-4  table-border">
			
			<thead class="table-hover table-striped">
				<th>NUMERO</th>
				<th>DESCRIPCION</th>
				<th>VALOR TOTAL</th>
				<th>MESES TOTALES</th>
				<th>MESES RESTANTES</th>
				<th>FECHA DEL PRESTAMO</th>
				<th>OPCIONES</th>
			</thead>
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
					<td>
						<a href="editar.php? id=<?php echo $mostrar['0'] ?> ">EDITAR</a>
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