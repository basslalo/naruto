<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from materia where id_mat=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f3" action="actualizando.php" method="post">

Nombre:
<input type="text" name="nom" value="<?php echo $res['nom_mat'];?>"><br>

creditos;
<input type="text" name="cre" value="<?php echo $res['cre_mat'];?>"><br>

clave:
<input type="text" name="cla" value="<?php echo $res['cla_mat'];?>"><br>

grupo:
<input type="text" name="gru" value="<?php echo $res['gru_mat'];?>"><br>

salon:
<input type="text" name="sal" value="<?php echo $res['sal_mat'];?>"><br>

horas:
<input type="text" name="hor" value="<?php echo $res['hor_mat'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Materia" >
	
</form>
<button><a href="listademateria.php">Buscar materia</a></button>