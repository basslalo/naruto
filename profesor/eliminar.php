<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from Profesor where id_pro=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='listadeprofesor.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>