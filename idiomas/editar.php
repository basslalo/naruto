<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from idiomas where id_idi=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f7" action="actualizando.php" method="post">

Materia:
<input type="text" name="mat" value="<?php echo $res['mat_idi'];?>"><br>

nivel:
<input type="text" name="nivel" value="<?php echo $res['nivel_idi'];?>"><br>

dura:
<input type="text" name="dura" value="<?php echo $res['dura_idi'];?>"><br>

clave:
<input type="text" name="clave" value="<?php echo $res['clave_idi'];?>"><br>

maes:
<input type="text" name="maes" value="<?php echo $res['maes_idi'];?>"><br>

dia:
<input type="text" name="dia" value="<?php echo $res['dia_idi'];?>"><br>

costo:
<input type="text" name="costo" value="<?php echo $res['costo_idi'];?>"><br>

unidad:
<input type="text" name="unidad" value="<?php echo $res['unidad_idi'];?>"><br>

aula:
<input type="text" name="aula" value="<?php echo $res['aula_idi'];?>"><br>

telefono:
<input type="text" name="tel" value="<?php echo $res['tel_idi'];?>"><br>

email:
<input type="text" name="email" value="<?php echo $res['email_idi'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Idiomas" >
	
</form>
<button><a href="idiomas.php">Buscar Idiomas</a></button>