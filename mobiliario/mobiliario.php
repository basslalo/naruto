<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<div class="contenedor-header" align="center">

<div class="imagen">
 	<img src="img/mue.png"  width="1350 px" height="230 px" >
 </div>
<a href="../menu.php">MENU</a><br>
</div>
	<title>LISTA DE MOBILIARIO</title>
</head>
<body background="img/mobi.jpg" alink="center">
<div class="tabla" align="center">
<form action="mobiliario.php" method="post"><br>
	<input type="text" size="70" name="filtro" placeholder="buscar por cantidad">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>sillas </td>
	    <td>mesas </td>
		<td>equipo computo </td>
		<td>Escaner </td>
		<td>Impresora </td>
		<td>Copiadora </td>
		<td>fax </td>
	    <td>Telefono </td>
		<td>Canon </td>
		<td>Escobas </td>
		<td>Garrafones </td>
		<td>Trapeadores </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from mobiliario";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_mob'];//puede ser con o
		$sillas=$resultados['sillas_mob'];
        $mesas=$resultados['mesas_mob'];
        $eqcom=$resultados['eqcom_mob'];
        $esca=$resultados['esca_mob'];
        $impre=$resultados['impre_mob'];
        $copi=$resultados['copi_mob'];
        $fax=$resultados['fax_mob'];
        $tel=$resultados['tel_mob'];
        $canon=$resultados['canon_mob'];
        $esco=$resultados['esco_mob'];
        $garra=$resultados['garra_mob'];
        $tra=$resultados['tra_mob'];
        

		echo "<tr>
			  
			  <td>$sillas </td>
			  <td>$mesas </td>
			  <td>$eqcom </td>
			  <td>$esca </td>
			  <td>$impre </td>
			  <td>$copi </td>
			  <td>$fax </td>
			  <td>$tel </td>
			  <td>$canon </td>
			  <td>$esco </td>
			  <td>$garra </td>
			  <td>$tra </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from mobiliario where sillas_mob like '%$buscar%' ";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_mob'];//puede ser con o
		$sillas=$resultados['sillas_mob'];
        $mesas=$resultados['mesas_mob'];
        $eqcom=$resultados['eqcom_mob'];
        $esca=$resultados['esca_mob'];
        $impre=$resultados['impre_mob'];
        $copi=$resultados['copi_mob'];
        $fax=$resultados['fax_mob'];
        $tel=$resultados['tel_mob'];
        $canon=$resultados['canon_mob'];
        $esco=$resultados['esco_mob'];
        $garra=$resultados['garra_mob'];
        $tra=$resultados['tra_mob'];
                

		echo "<tr>
			  
			   <td>$sillas </td>
			  <td>$mesas </td>
			  <td>$eqcom </td>
			  <td>$esca </td>
			  <td>$impre </td>
			  <td>$copi </td>
			  <td>$fax </td>
			  <td>$tel </td>
			  <td>$canon </td>
			  <td>$esco </td>
			  <td>$garra </td>
			  <td>$tra </td>

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

