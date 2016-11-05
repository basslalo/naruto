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
	<title>LISTA DE Idiomas</title>
</head>
<body background="img/piz.jpg" alink="center">
<div class="tabla" align="center">
<form action="idiomas.php" method="post"><br>
	<input type="text" size="70" name="filtro" placeholder="buscar por Materia, Prosefor">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>Materia </td>
	    <td>Nivel </td>
		<td>Duracion </td>
		<td>Clave </td>
		<td>Maestro </td>
		<td>Dia </td>
		<td>Costo </td>
		<td>Unidad </td>
		<td>Aula </td>
		<td>Telefono </td>
		<td>E-mail </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from idiomas";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_idi'];//puede ser con o
		$mat=$resultados['mat_idi'];
        $nivel=$resultados['nivel_idi'];
        $dura=$resultados['dura_idi'];
        $clave=$resultados['clave_idi'];
        $maes=$resultados['maes_idi'];
        $dia=$resultados['dia_idi'];
        $costo=$resultados['costo_idi'];
        $unidad=$resultados['unidad_idi'];
        $aula=$resultados['aula_idi'];
        $tel=$resultados['tel_idi'];
        $email=$resultados['email_idi'];
        

		echo "<tr>
			  
			  <td>$mat </td>
			  <td>$nivel </td>
			  <td>$dura </td>
			  <td>$clave </td>
			  <td>$maes </td>
			  <td>$dia </td>
			  <td>$costo </td>
			  <td>$unidad </td>
			  <td>$aula </td>
			  <td>$tel </td>
			  <td>$email </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from idiomas where mat_idi like '%$buscar%' or maes_idi like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_idi'];//puede ser con o
		$mat=$resultados['mat_idi'];
        $nivel=$resultados['nivel_idi'];
        $dura=$resultados['dura_idi'];
        $clave=$resultados['clave_idi'];
        $maes=$resultados['maes_idi'];
        $dia=$resultados['dia_idi'];
        $costo=$resultados['costo_idi'];
        $unidad=$resultados['unidad_idi'];
        $aula=$resultados['aula_idi'];
        $tel=$resultados['tel_idi'];
        $email=$resultados['email_idi'];
        

		echo "<tr>
			  
			  <td>$mat </td>
			  <td>$nivel </td>
			  <td>$dura </td>
			  <td>$clave </td>
			  <td>$maes </td>
			  <td>$dia </td>
			  <td>$costo </td>
			  <td>$unidad </td>
			  <td>$aula </td>
			  <td>$tel </td>
			  <td>$email </td>

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

