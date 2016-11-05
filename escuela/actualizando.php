<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$nom=$_POST['nom'];
$cam=$_POST['cam'];
$cla=$_POST['cla'];
$zona=$_POST['zona'];
$sec=$_POST['sec'];
$niv=$_POST['niv'];
$tipo=$_POST['tipo'];
$email=$_POST['email'];
$cap=$_POST['cap'];
$pag=$_POST['pag'];
$red=$_POST['red'];
$rfc=$_POST['rfc'];
$cue=$_POST['cue'];
$calle=$_POST['calle'];
$nume=$_POST['nume'];
$col=$_POST['col'];
$cp=$_POST['cp'];


$sql="update escuela set nom_esc='$nom', cam_esc='$cam', cla_esc='$cla', zona_esc='$zona', sec_esc='$sec', niv_esc='$niv', tipo_esc='$tipo', email_esc='$email', cap_esc='$cap', pag_esc='$pag', red_esc='$red', rfc_esc='$rfc',cue_esc='$cue', calle_esc='$calle', nume_esc='$nume', col_esc='$col', cp_esc='$cp' where id_esc='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='escuela.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>