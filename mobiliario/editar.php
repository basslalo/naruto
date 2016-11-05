<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from mobiliario where id_mob=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f6" action="actualizando.php" method="post">

sillas:
<input type="text" name="sillas" value="<?php echo $res['sillas_mob'];?>"><br>

mesas:
<input type="text" name="mesas" value="<?php echo $res['mesas_mob'];?>"><br>

Equipo computo:
<input type="text" name="eqcom" value="<?php echo $res['eqcom_mob'];?>"><br>

Escaner:
<input type="text" name="esca" value="<?php echo $res['esca_mob'];?>"><br>

Impresora:
<input type="text" name="impre" value="<?php echo $res['impre_mob'];?>"><br>

Copiadora:
<input type="text" name="copi" value="<?php echo $res['copi_mob'];?>"><br>

Fax:
<input type="text" name="fax" value="<?php echo $res['fax_mob'];?>"><br>

Telefono:
<input type="text" name="tel" value="<?php echo $res['tel_mob'];?>"><br>

canon:
<input type="text" name="canon" value="<?php echo $res['canon_mob'];?>"><br>

Escoba:
<input type="text" name="esco" value="<?php echo $res['esco_mob'];?>"><br>

Garrafon:
<input type="text" name="garra" value="<?php echo $res['garra_mob'];?>"><br>

Trapiador:
<input type="text" name="tra" value="<?php echo $res['tra_mob'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Mobiliario" >
	
</form>
<button><a href="mobiliario.php">Buscar en Mobiliario</a></button>