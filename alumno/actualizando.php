<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$n=$_POST['nom'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$con=$_POST['con'];
$curp=$_POST['curp'];
$edad=$_POST['edad'];
$nacio=$_POST['nacio'];
$sexo=$_POST['sexo'];
$car=$_POST['car'];
$naci=$_POST['naci'];
$sem=$_POST['sem'];
$tel_casa=$_POST['tel_casa'];
$tel_cel=$_POST['tel_cel'];
$rfc=$_POST['rfc'];
$naci=$_POST['naci'];
$calle=$_POST['calle'];
$num=$_POST['num'];
$col=$_POST['col'];
$cp=$_POST['cp'];

$sql="update alumnos set nom_alu='$n', ap_alu='$ap', am_alu='$am', num_con_alu='$con', curp_alu='$curp', edad_alu='$edad', nacio_alu='$nacio', sexo_alu='$sexo', car_alu='$car', naci_alu='$naci', sem_alu='$sem', tel_casa_alu='$tel_casa', tel_cel_alu='$tel_cel', rfc_alu='$rfc', calle_alu='$calle', num_alu='$num', col_alu='$col', cp_alu='$cp'  where id_alu='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='listadealumnos.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>