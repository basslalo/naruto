<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<div class="contenedor-header">

 <div class="imagen">
 	<img src="img/edu.jpg"  width="1300 px" height="200 px" >
 </div>
 <div class="menu" align="center">	
<a href="../menu.php">MENU</a><br>
</div>

</div>
	<title>LISTA DE PROFESORES</title>
</head>
<body background="img/fon.jpg">

<div class="table" align="center">
<h1>LISTA DE PROFESORES</h1>
	
	<form action="listadeprofesor.php" method="post"><br>
	<input type="text" size="70" name="filtro" placeholder="buscar por nombre, RFC">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>Nombre </td>
	    <td>Apellido P. </td>
		<td>Apellido M. </td>
		<td>Direccion </td>
		<td>CURP </td>
		<td>Nacionalidad </td>
		<td>Edad </td>	
		<td>Fecha Nacimiento </td>
		<td>Sexo </td>
		<td>Telefono de Casa</td>
		<td>Telefono Celular </td>
		<td>RFC </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from profesor";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_pro'];//puede ser con o
		$n=$resultados['nom_pro'];
        $ap=$resultados['ap_pro'];
        $am=$resultados['am_pro'];
        $d=$resultados['dir_pro'];
        $curp=$resultados['curp_pro'];
        $nacio=$resultados['nacio_pro'];
        $edad=$resultados['edad_pro'];
        $naci=$resultados['naci_pro'];
        $sexo=$resultados['sexo_pro'];
        $tel_casa=$resultados['tel_casa_pro'];
        $tel_cel=$resultados['tel_cel_pro'];
        $rfc=$resultados['rfc_pro'];

		echo "<tr>
			  
			  <td>$n </td>
			  <td>$ap </td>
			  <td>$am </td>
			  <td>$d </td>
			  <td>$curp </td>
			  <td>$nacio </td>
			  <td>$edad </td>
			  <td>$naci </td>
			  <td>$sexo </td>
			  <td>$tel_casa </td>
			  <td>$tel_cel </td>
			  <td>$rfc </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from profesor where nom_pro like '%$buscar%' or rfc_pro like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_pro'];//puede ser con o
		$n=$resultados['nom_pro'];
        $ap=$resultados['ap_pro'];
        $am=$resultados['am_pro'];
        $d=$resultados['dir_pro'];
        $curp=$resultados['curp_pro'];
        $nacio=$resultados['nacio_pro'];
        $edad=$resultados['edad_pro'];
        $naci=$resultados['naci_pro'];
        $sexo=$resultados['sexo_pro'];
        $tel_casa=$resultados['tel_casa_pro'];
        $tel_cel=$resultados['tel_cel_pro'];
        $rfc=$resultados['rfc_pro'];

		echo "<tr>
			  
			  <td>$n </td>
			  <td>$ap </td>
			  <td>$am </td>
			  <td>$d </td>
			  <td>$curp </td>
			  <td>$nacio </td>
			  <td>$edad </td>
			  <td>$naci </td>
			  <td>$sexo </td>
			  <td>$tel_casa </td>
			  <td>$tel_cel </td>
			  <td>$rfc </td>

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

