<?php
include("conexion.php");
?>

<?php
//ahora lo actualizamos si aprietan el boton
$id=$_POST['id'];//toma el campo id a modificar
$sec=$_POST['sec'];
$art=$_POST['art'];
$enc=$_POST['enc'];
$hor=$_POST['hor'];
$tal=$_POST['tal'];
$aut=$_POST['aut'];
$edi=$_POST['edi'];
$edic=$_POST['edic'];
$fic=$_POST['fic'];
$tes=$_POST['tes'];
$for=$_POST['for'];
$gen=$_POST['gen'];
$rev=$_POST['rev'];
$per=$_POST['per'];
$tel=$_POST['tel'];


$sql="update biblioteca set sec_bi='$sec', art_bi='$art', enc_bi='$enc', hor_bi='$hor', tal_bi='$tal', aut_bi='$aut', edi_bi='edi', edic_bi='edic', fic_bi='fic', tes_bi='tes', for_bi='for', gen_bi='gen', rev_bi='rev',per_bi='per', tel_bi='tel' where id_bi='$id'";
$consulta= mysql_query($sql, $cn);
if ($consulta)
{
	echo"<script>alert('Registro actualizado'); window.location='biblioteca.php';</script>";
}
else
{
	echo"no se pudo actulizar";
}


?>