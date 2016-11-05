<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from biblioteca where id_bi=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f4" action="actualizando.php" method="post">

seccion:
<input type="text" name="sec" value="<?php echo $res['sec_bi'];?>"><br>

articulo:
<input type="text" name="art" value="<?php echo $res['art_bi'];?>"><br>

encargado:
<input type="text" name="enc" value="<?php echo $res['enc_bi'];?>"><br>

horario:
<input type="text" name="hor" value="<?php echo $res['hor_bi'];?>"><br>

taller:
<input type="text" name="tal" value="<?php echo $res['tal_bi'];?>"><br>

autor:
<input type="text" name="aut" value="<?php echo $res['aut_bi'];?>"><br>

editorial:
<input type="text" name="edi" value="<?php echo $res['edi_bi'];?>"><br>

edicion:
<input type="text" name="edic" value="<?php echo $res['edic_bi'];?>"><br>

ficha:
<input type="text" name="fic" value="<?php echo $res['fic_bi'];?>"><br>

tesis:
<input type="text" name="tes" value="<?php echo $res['tes_bi'];?>"><br>

formato:
<input type="text" name="for" value="<?php echo $res['for_bi'];?>"><br>

genero:
<input type="text" name="gen" value="<?php echo $res['gen_bi'];?>"><br>

revista:
<input type="text" name="rev" value="<?php echo $res['rev_bi'];?>"><br>

periodico:
<input type="text" name="per" value="<?php echo $res['per_bi'];?>"><br>

telefono:
<input type="text" name="tel" value="<?php echo $res['tel_bi'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="submit"  value="Actualizar Biblioteca" >
	
</form>

<button><a href="biblioteca.php">Buscar en Biublioteca</a></button>
