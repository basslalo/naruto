<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$n=$_POST['nom'];
$cr=$_POST['cre'];
$cla=$_POST['cla'];
$gru=$_POST['gru'];
$sal=$_POST['sal'];
$hor=$_POST['hor'];


$sql="update materia set nom_mat='$n', cre_mat='$cr', cla_mat='$cla', gru_mat='$gru', sal_mat='$sal', hor_mat='$hor' where id_mat='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='listademateria.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>