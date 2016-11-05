<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from idiomas where id_idi=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='idiomas.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>