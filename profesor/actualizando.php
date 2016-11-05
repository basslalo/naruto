<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$n=$_POST['nom'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$d=$_POST['dir'];
$curp=$_POST['curp'];
$nacio=$_POST['nacio'];
$edad=$_POST['edad'];
$naci=$_POST['naci'];
$sexo=$_POST['sexo'];
$tel_casa=$_POST['tel_casa'];
$tel_cel=$_POST['tel_cel'];
$rfc=$_POST['rfc'];

$sql="update profesor set nom_pro='$n', ap_pro='$ap', am_pro='$am', dir_pro='$d', curp_pro='$curp', nacio_pro='$nacio', edad_pro='$edad', naci_pro='$naci', sexo_pro='$sexo',tel_casa_pro='$tel_casa', tel_cel_pro='$tel_cel', rfc_pro='$rfc'  where id_pro='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='listadeprofesor.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>