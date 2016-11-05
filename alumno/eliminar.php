<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "delete from alumnos where id_alu=$id";
$consulta= mysql_query($sql, $cn);
if ($consulta) 
{
	echo"<script>alert('Registro eliminado'); window.location='listadealumnos.php';</script>";
}
else
{
	echo"Error al eliminar";
}

?>