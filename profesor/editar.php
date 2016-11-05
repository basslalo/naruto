<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>

<div class="imagen">
  <img src="img/profe.jpg"  width="1300 px" height="200 px" >
 </div>

	<title>Editar Profesor</title>
</head>
<body>

<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from profesor where id_pro=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f2" action="actualizando.php" method="post">

Nombre:
<input type="text" name="nom" value="<?php echo $res['nom_pro'];?>"><br>

Apellido paterno:
<input type="text" name="ap" value="<?php echo $res['ap_pro'];?>"><br>

Apellido materno:
<input type="text" name="am" value="<?php echo $res['am_pro'];?>"><br>

Direccion:
<input type="text" name="dir" value="<?php echo $res['dir_pro'];?>"><br>

curp:
<input type="text" name="curp" value="<?php echo $res['curp_pro'];?>"><br>

nacionalidad:
<input type="text" name="nacio" value="<?php echo $res['nacio_pro'];?>"><br>

edad:
<input type="text" name="edad" value="<?php echo $res['edad_pro'];?>"><br>

fecha de nacimiento:
<input type="text" name="naci" value="<?php echo $res['naci_pro'];?>"><br>

sexo:
<input type="text" name="sexo" value="<?php echo $res['sexo_pro'];?>"><br>

telefono_de_casa:
<input type="text" name="tel_casa" value="<?php echo $res['tel_casa_pro'];?>"><br>

telefono_de_cel:
<input type="text" name="tel_cel" value="<?php echo $res['tel_cel_pro'];?>"><br>

rfc:
<input type="text" name="rfc" value="<?php echo $res['rfc_pro'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Profesor" >
	
</form><br>

<button><a href="listadeprofesor.php">Buscar Profesor</a></button>

</body>
</html>


