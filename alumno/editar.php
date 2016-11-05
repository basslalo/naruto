<?php
include("conexion.php");
?>
<?php
$id=$_GET['id'];//toma el campo id
$sql= "select * from alumnos where id_alu=$id";
$consulta=mysql_query($sql,$cn);
$res=mysql_fetch_array($consulta);//todo esta en el arreglo RES
?>
<form name="f1" action="actualizando.php" method="post">

Nombre:
<input type="text" name="nom" value="<?php echo $res['nom_alu'];?>"><br>

Apellido paterno:
<input type="text" name="ap" value="<?php echo $res['ap_alu'];?>"><br>

Apellido materno:
<input type="text" name="am" value="<?php echo $res['am_alu'];?>"><br>

numero de control:
<input type="text" name="con" value="<?php echo $res['num_con_alu'];?>"><br>

curp:
<input type="text" name="curp" value="<?php echo $res['curp_alu'];?>"><br>

edad:
<input type="text" name="edad" value="<?php echo $res['edad_alu'];?>"><br>

nacionalidad:
<input type="text" name="nacio" value="<?php echo $res['nacio_alu'];?>"><br>

sexo:
<input type="text" name="sexo" value="<?php echo $res['sexo_alu'];?>"><br>

carrera:
<input type="text" name="car" value="<?php echo $res['car_alu'];?>"><br>

fecha de nacimiento:
<input type="text" name="naci" value="<?php echo $res['naci_alu'];?>"><br>

semestre:
<input type="text" name="sem" value="<?php echo $res['sem_alu'];?>"><br>

telefono_de_casa:
<input type="text" name="tel_casa" value="<?php echo $res['tel_casa_alu'];?>"><br>

telefono_de_cel:
<input type="text" name="tel_cel" value="<?php echo $res['tel_cel_alu'];?>"><br>

rfc:
<input type="text" name="rfc" value="<?php echo $res['rfc_alu'];?>"><br>

calle:
<input type="text" name="calle" value="<?php echo $res['calle_alu'];?>"><br>

numero:
<input type="text" name="num" value="<?php echo $res['num_alu'];?>"><br>

colonia:
<input type="text" name="col" value="<?php echo $res['col_alu'];?>"><br>

cp:
<input type="text" name="cp" value="<?php echo $res['cp_alu'];?>"><br>

<input type="hidden" name="id" value="<?php echo $id; ?>"><br>

<input type="submit"  value="Actualizar Alumno" >
	
</form>
<button><a href="listadealumnos.php">Buscar Alumno</a></button>