
<div class="contenedor-header">

 <div class="imagen">
 	<img src="img/tuesc.gif"  width="1350 px" height="230 px" >
 </div><br>
 </div>
<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<div class="menu" align="center">
	<a href="../menu.php">MENU</a><br>
	
</div>
	<title>Escuela</title>
</head>
<body background="img/piz.jpg">
<div class="tabla" align="center">
	
	<form action="escuela.php" method="post"><br>
	<input type="text" size="90" name="filtro" placeholder="buscar por Clave o Nombre">
	<input type="submit" value="buscar">
</form>


<table border="8" cellpadding="1" bgcolor="silver">
	<tr>
		<td>Nombre </td>
		<td>Campus </td>
		<td>Clave </td>
		<td>Zona </td>
		<td>Sector </td>
		<td>Nivel </td>
		<td>Tipo </td>
		<td>E-mail </td>
		<td>Capacidad </td>
		<td>Pagina </td>
		<td>Red Social </td>
		<td>RFC </td>
		<td>Cuenta </td>
		<td>Calle </td>
		<td>Numero </td>
		<td>Colnia </td>
		<td>CP </td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php

	if($_POST['filtro']=="") 
	{
	$sql="select * from escuela";
	$consulta=mysql_query($sql,$cn);
	while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_esc'];//puede ser con o
		$nom=$resultados['nom_esc'];
        $cam=$resultados['cam_esc'];
        $cla=$resultados['cla_esc'];
        $zona=$resultados['zona_esc'];
        $sec=$resultados['sec_esc'];    
        $niv=$resultados['niv_esc'];
        $tipo=$resultados['tipo_esc'];
        $email=$resultados['email_esc'];
        $cap=$resultados['cap_esc'];
        $pag=$resultados['pag_esc'];
        $red=$resultados['red_esc'];
      	$rfc=$resultados['rfc_esc'];
        $cue=$resultados['cue_esc'];
        $calle=$resultados['calle_esc'];
        $nume=$resultados['nume_esc'];
        $col=$resultados['col_esc'];
        $cp=$resultados['cp_esc'];

		echo "<tr>
			  
			  <td>$nom </td>
			  <td>$cam </td>
			  <td>$cla </td>
			  <td>$zona </td>
			  <td>$sec </td>
			  <td>$niv </td>
			  <td>$tipo </td>
			  <td>$email </td>
			  <td>$cap </td>
			  <td>$pag </td>
			  <td>$red </td>
			  <td>$rfc </td>
			  <td>$cue </td>
			  <td>$calle </td>
			  <td>$nume </td>
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
		$sql="select * from escuela where cla_esc like '%$buscar%' or nom_esc like '%$buscar%'";//like compara los registros
		$consulta=mysql_query($sql, $cn);
		while($resultados=mysql_fetch_array($consulta))
	{
		$id=$resultados['id_esc'];//puede ser con o
		$nom=$resultados['nom_esc'];
        $dir=$resultados['dir_esc'];
        $cam=$resultados['cam_esc'];
        $cla=$resultados['cla_esc'];
        $zona=$resultados['zona_esc'];
        $sec=$resultados['sec_esc'];    
        $niv=$resultados['niv_esc'];
        $tipo=$resultados['tipo_esc'];
        $email=$resultados['email_esc'];
        $cap=$resultados['cap_esc'];
        $pag=$resultados['pag_esc'];
        $red=$resultados['red_esc'];
      	$rfc=$resultados['rfc_esc'];
        $cue=$resultados['cue_esc'];
        $calle=$resultados['calle_esc'];
        $nume=$resultados['nume_esc'];
        $col=$resultados['col_esc'];
        $cp=$resultados['cp_esc'];

        

		echo "<tr>
			  
			  <td>$nom </td>
			  <td>$dir </td>
			  <td>$cam </td>
			  <td>$cla </td>
			  <td>$zona </td>
			  <td>$sec </td>
			  <td>$niv </td>
			  <td>$tipo </td>
			  <td>$email </td>
			  <td>$cap </td>
			  <td>$pag </td>
			  <td>$red </td>
			  <td>$rfc </td>
			  <td>$cue </td>
			  <td>$calle </td>
			  <td>$nume </td>
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



