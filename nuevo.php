<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>EDITAR</title>
</head>
<body>	
	<div class="container col-sm-12 col-md-6 col-lg-6">

      <form action="insertar.php" method="post">
      <table class="table table-hover table-border shadow mt-4">
        
        <h1>NUEVO</h1>  
        <h3>INSERTAR NUEVO CREDITO</h3>   
        
        <tr>
        <th>DESCRIPCION</th>
        <td align="right" ><input class="" type="text" name="descripcion"></td>
      </tr>
     
      <tr>
        <th>VALOR TOTAL</th>
        <td align="right"><input class="" type="text" name="valor_Total"></td>
      </tr> 
      <tr>
        <th>MESES TOTALES DE LA DEUDA</th>
        <td align="right"><input class="" type="text" name="meses_Total"></td>
      </tr>
      <tr>        
        <th>MESES RESTANTES</th>
        <td align="right"><input type="text" name="meses_Pendiente"></td>   
      <tr>
      <tr>
        <th>FECHA DEL PRESTAMO</th>
        <td align="right"><input type="date" name="fecha_Prestamo"></td>
      </tr><td></td>
        <td align="right">
          <input class="btn btn-primary" type="submit" value="INGRESAR">
          <a class="btn btn-primary" href="index.php">REGRESAR</a>
        </td>
        
      </tr>
      
     </table>
    </form>
    
		
	</div>
	
</body>
</html>