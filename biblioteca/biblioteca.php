<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<div class="contenedor-header" align="center">

 <div class="imagen" >
 	<img src="img/bi.gif"  width="1350 px" height="230 px">
 </div<br>
<a href="../menu.php">MENU</a><br>
</div>

	<title>BIBLIOTECA</title>
</head>
<body background="img/piz.jpg">
<div class="table" align="center">
<form action="biblioteca.php" method="post"><br>
	<input type="text" size="50" name="filtro" placeholder="buscar por autor o encargado">
	<input type="submit" value="buscar">
</form><br>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>Seccion </td>
	    <td>Articulos </td>
		<td>Encargados </td>
		<td>Horario </td>
		<td>Talleres </td>
		<td>Autor </td>
		<td>Editorial </td>
		<td>Edicion </td>
		<td>Ficha Bibliografica </td>
		<td>Tesis </td>
		<td>Formato </td>
		<td>Genero </td>
		<td>Revista </td>
		<td>Periodico </td>
		<td>Telefono </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from biblioteca";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_bi'];//puede ser con o
		$sec=$resultados['sec_bi'];
        $art=$resultados['art_bi'];
        $enc=$resultados['enc_bi'];
        $hor=$resultados['hor_bi'];
        $tal=$resultados['tal_bi'];
        $aut=$resultados['aut_bi'];    
        $edi=$resultados['edi_bi'];
        $edic=$resultados['edic_bi'];
        $fic=$resultados['fic_bi'];
        $tes=$resultados['tes_bi'];
        $for=$resultados['for_bi'];
        $gen=$resultados['gen_bi'];
      	$rev=$resultados['rev_bi'];
        $per=$resultados['per_bi'];
        $tel=$resultados['tel_bi'];
        

		echo "<tr>
			  
			  <td>$sec </td>
			  <td>$art </td>
			  <td>$enc </td>
			  <td>$hor </td>
			  <td>$tal </td>
			  <td>$aut </td>
			  <td>$edi </td>
			  <td>$edic </td>
			  <td>$fic </td>
			  <td>$tes </td>
			  <td>$for </td>
			  <td>$gen </td>
			  <td>$rev </td>
			  <td>$per </td>
			  <td>$tel </td>

			  <td><a href='editar.php?id=$id'>Editar</a></td>
			  <td><a href='eliminar.php?id=$id'>Eliminar</a></td>

			  </tr>";

		}//while
	}//cierre if
	else
	{
		$buscar=$_POST['filtro'];
		$sql="select * from biblioteca where aut_bi like '%$buscar%' or enc_bi like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_bi'];//puede ser con o
		$sec=$resultados['sec_bi'];
        $art=$resultados['art_bi'];
        $enc=$resultados['enc_bi'];
        $hor=$resultados['hor_bi'];
        $tal=$resultados['tal_bi'];
        $aut=$resultados['aut_bi'];    
        $edi=$resultados['edi_bi'];
        $edic=$resultados['edic_bi'];
        $fic=$resultados['fic_bi'];
        $tes=$resultados['tes_bi'];
        $for=$resultados['for_bi'];
        $gen=$resultados['gen_bi'];
      	$rev=$resultados['rev_bi'];
        $per=$resultados['per_bi'];
        $tel=$resultados['tel_bi'];
        

		echo "<tr>
			  
			  <td>$sec </td>
			  <td>$art </td>
			  <td>$enc </td>
			  <td>$hor </td>
			  <td>$tal </td>
			  <td>$aut </td>
			  <td>$edi </td>
			  <td>$edic </td>
			  <td>$fic </td>
			  <td>$tes </td>
			  <td>$for </td>
			  <td>$gen </td>
			  <td>$rev </td>
			  <td>$per </td>
			  <td>$tel </td>

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


