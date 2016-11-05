<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from biblioteca where id_bi=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='biblioteca.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>