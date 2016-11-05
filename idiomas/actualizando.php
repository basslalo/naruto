<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$mat=$_POST['mat'];
$nivel=$_POST['nivel'];
$dura=$_POST['dura'];
$clave=$_POST['clave'];
$maes=$_POST['maes'];
$dia=$_POST['dia'];
$costo=$_POST['costo'];
$unidad=$_POST['unidad'];
$aula=$_POST['aula'];
$tel=$_POST['tel'];
$email=$_POST['email'];

$sql="update idiomas set mat_idi='$mat', nivel_idi='$nivel', dura_idi='$dura', clave_idi='$clave', maes_idi='$maes', dia_idi='$dia', costo_idi='$costo', unidad_idi='$unidad', aula_idi='$aula', tel_idi='$tel', email_idi='$email' where id_idi='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='idiomas.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>