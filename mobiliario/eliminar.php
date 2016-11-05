<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from mobiliario where id_mob=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='mobiliario.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>