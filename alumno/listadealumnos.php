<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<div class="contenedor-header" align="center">

 <div class="imagen" >
 	<img src="img/alum.png"  width="1350 px" height="200 px" >
 </div><br>
<a href="../menu.php">MENU</a><br>
</div>
	<title>MENU</title>
</head>

<body background="img/piz.jpg">
<div class="tabla" align="center">
	<form action="listadealumnos.php" method="post"><br>
	<input type="text" size="70" name="filtro" placeholder="buscar por numero de control">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr align="center">
		<td>Nombre </td>
	    <td>Apellido P. </td>
		<td>Apellido M. </td>
		<td>Num. Control </td>
		<td>CURP </td>
		<td>Edad </td>
		<td>Nacionalidad </td>
		<td>Sexo </td>
		<td>Carrera </td>
		<td>Fecha Nacimiento </td>
		<td>Semestre </td>
		<td>Telefono de Casa</td>
		<td>Telefono Celular </td>
		<td>RFC </td>
		<td>Calle</td>
		<td>numero</td>
		<td>colonia</td>
		<td>C.P.</td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from alumnos";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_alu'];//puede ser con o
		$n=$resultados['nom_alu'];
        $ap=$resultados['ap_alu'];
        $am=$resultados['am_alu'];
        $num_con=$resultados['num_con_alu'];
        $curp=$resultados['curp_alu'];
        $edad=$resultados['edad_alu'];
        $nacio=$resultados['nacio_alu'];
        $sexo=$resultados['sexo_alu'];
        $car=$resultados['car_alu'];
        $naci=$resultados['naci_alu'];
        $sem=$resultados['sem_alu'];
        $tel_casa=$resultados['tel_casa_alu'];
        $tel_cel=$resultados['tel_cel_alu'];
        $rfc=$resultados['rfc_alu'];
        $calle=$resultados['calle_alu'];
        $num=$resultados['num_alu'];
        $col=$resultados['col_alu'];
        $cp=$resultados['cp_alu'];

		echo "<tr>
			  
			  <td>$n </td>
			  <td>$ap </td>
			  <td>$am </td>
			  <td>$num_con </td>
			  <td>$curp </td>
			  <td>$edad </td>
			  <td>$nacio </td>
			  <td>$sexo </td>
			  <td>$car </td>
			  <td>$naci </td>
			  <td>$sem </td>
			  <td>$tel_casa </td>
			  <td>$tel_cel </td>
			  <td>$rfc </td>
			  <td>$calle </td>
			  <td>$num </td>
			  <td>$col </td>
			  <td>$cp </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from alumnos where num_con_alu like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_alu'];//puede ser con o
		$n=$resultados['nom_alu'];
        $ap=$resultados['ap_alu'];
        $am=$resultados['am_alu'];
        $num_con=$resultados['num_con_alu'];
        $curp=$resultados['curp_alu'];
        $edad=$resultados['edad_alu'];
        $nacio=$resultados['nacio_alu'];
        $sexo=$resultados['sexo_alu'];
        $car=$resultados['car_alu'];
        $naci=$resultados['naci_alu'];
        $sem=$resultados['sem_alu'];
        $tel_casa=$resultados['tel_casa_alu'];
        $tel_cel=$resultados['tel_cel_alu'];
        $rfc=$resultados['rfc_alu'];
        $calle=$resultados['calle_alu'];
        $num=$resultados['num_alu'];
        $col=$resultados['col_alu'];
        $cp=$resultados['cp_alu'];

		echo "<tr>
			  
			  <td>$n </td>
			  <td>$ap </td>
			  <td>$am </td>
			  <td>$num_con </td>
			  <td>$curp </td>
			  <td>$edad </td>
			  <td>$nacio </td>
			  <td>$sexo </td>
			  <td>$car </td>
			  <td>$naci </td>
			  <td>$sem </td>
			  <td>$tel_casa </td>
			  <td>$tel_cel </td>
			  <td>$rfc </td>
			  <td>$calle </td>
			  <td>$num </td>
			  <td>$col </td>
			  <td>$cp </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre de consulta con filtro
   ?>
</table><br>
<button><a href="insertar.php">Insertar</a></button>
</div>

</body>
</html>


