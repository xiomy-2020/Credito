<?php
include('conexion.php');
$id = $_GET['id'];
/*$cnx=mysqli_connect("localhost","root","","deudas");*/	
$sql = "DELETE FROM credito WHERE id like $id ";
$rta = mysqli_query($cnx,$sql);
if(!$rta){
	echo 'No se elimino';
}else{
	header('Location:index.php');
}
?>