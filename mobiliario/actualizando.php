<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$sillas=$_POST['sillas'];
$mesas=$_POST['mesas'];
$eqcom=$_POST['eqcom'];
$esca=$_POST['esca'];
$impre=$_POST['impre'];
$copi=$_POST['copi'];
$fax=$_POST['fax'];
$tel=$_POST['tel'];
$canon=$_POST['canon'];
$esco=$_POST['esco'];
$garra=$_POST['garra'];
$tra=$_POST['tra'];


$sql="update mobiliario set sillas_mob='$sillas', mesas_mob='$mesas', eqcom_mob='$eqcom', esca_mob='$esca', impre_mob='$impre', copi_mob='$copi', fax_mob='$fax', tel_mob='$tel', canon_mob='$canon', esco_mob='$esco', garra_mob='$garra', tra_mob='$tra' where id_mob='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='mobiliario.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>