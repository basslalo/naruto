<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from escuela where id_esc=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f5" action="actualizando.php" method="post">

Nombre:
<input type="text" name="nom" value="<?php echo $res['nom_esc'];?>"><br>

campus:
<input type="text" name="cam" value="<?php echo $res['cam_esc'];?>"><br>

clave:
<input type="text" name="cla" value="<?php echo $res['cla_esc'];?>"><br>

zona:
<input type="text" name="zona" value="<?php echo $res['zona_esc'];?>"><br>

sector:
<input type="text" name="sec" value="<?php echo $res['sec_esc'];?>"><br>

nivel:
<input type="text" name="niv" value="<?php echo $res['niv_esc'];?>"><br>

tipo:
<input type="text" name="tipo" value="<?php echo $res['tipo_esc'];?>"><br>

email:
<input type="text" name="email" value="<?php echo $res['email_esc'];?>"><br>

capacidad:
<input type="text" name="cap" value="<?php echo $res['cap_esc'];?>"><br>

pagina:
<input type="text" name="pag" value="<?php echo $res['pag_esc'];?>"><br>

red:
<input type="text" name="red" value="<?php echo $res['red_esc'];?>"><br>

rfc
<input type="text" name="rfc" value="<?php echo $res['rfc_esc'];?>"><br>

cuenta:
<input type="text" name="cue" value="<?php echo $res['cue_esc'];?>"><br>

calle:
<input type="text" name="calle" value="<?php echo $res['calle_esc'];?>"><br>

numero:
<input type="text" name="nume" value="<?php echo $res['nume_esc'];?>"><br>

Colonia:
<input type="text" name="col" value="<?php echo $res['col_esc'];?>"><br>

CP:
<input type="text" name="cp" value="<?php echo $res['cp_esc'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Escuela" ><br>
	
</form>
<button><a href="escuela.php">Buscar escuela</a></button>