<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head>
<div class="imagen">
  <img src="img/materias.jpg"  width="1350 px" height="230 px" >
 </div>
   <title>insertar Materia</title>
</head>
<body background="img/esc.jpg">
<div class="materias" align="center">
   <form name="f3" action="agregar.php" method="post"><br>

   nombre:
   <input type="text" name="nom" placeholder="Nombre"><br>

   creditos:
   <input type="text" name="cre" placeholder="Creditos"><br>

   clave:
    <input type="text" name="cla" placeholder="Clave"><br>
  
   Grupo:
   <input type="text" name="gru" placeholder="Grupo"><br>

   salon:
   <input type="text" name="sal" placeholder="Salon"><br>  
   
    horas:
    <input type="text" name="hor" placeholder="Horas"><br>

   <br><input type="submit" value="Agregar Materia">
   
   </form><br>
   <button><a href="listademateria.php">Buscar materia</a></button>
</div>
</body>
</html>

