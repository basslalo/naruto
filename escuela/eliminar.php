<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from escuela where id_esc=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='escuela.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>