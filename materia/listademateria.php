<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<div class="contenedor-header" align="center">

 <div class="imagen">
 	<img src="img/mat.jpg"  width="1350 px" height="230 px" >
 </div>	
<a href="../menu.php">MENU</a><br>
</div>
	<title>LISTA DE MATERIA</title>
</head>
<body background="img/piz.jpg" alink="center">
<div class="tabla" align="center">
<form action="listademateria.php" method="post"><br>
	<input type="text" size="70" name="filtro" placeholder="buscar por clave, Nombre">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>Nombre </td>
	    <td>Creditos </td>
		<td>Clave </td>
		<td>Grupo </td>
		<td>Salon </td>
		<td>Horas </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from materia";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_mat'];//puede ser con o
		$n=$resultados['nom_mat'];
        $cr=$resultados['cre_mat'];
        $cla=$resultados['cla_mat'];
        $gru=$resultados['gru_mat'];
        $sal=$resultados['sal_mat'];
        $hor=$resultados['hor_mat'];
        

		echo "<tr>
			  
			  <td>$n </td>
			  <td>$cr </td>
			  <td>$cla </td>
			  <td>$gru </td>
			  <td>$sal </td>
			  <td>$hor </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from materia where nom_mat like '%$buscar%' or cla_mat like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_mat'];//puede ser con o
		$n=$resultados['nom_mat'];
        $cr=$resultados['cre_mat'];
        $cla=$resultados['cla_mat'];
        $gru=$resultados['gru_mat'];
        $sal=$resultados['sal_mat'];
        $hor=$resultados['hor_mat'];
        

		echo "<tr>
			  
			   <td>$n </td>
			  <td>$cr </td>
			  <td>$cla </td>
			  <td>$gru </td>
			  <td>$sal </td>
			  <td>$hor </td>

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

