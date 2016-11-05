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
<div class="Idiomas" align="center">
   <form name="f7" action="agregar.php" method="post"><br>

   materia:
   <input type="text" name="mat" placeholder="Materia"><br>

   nivel:
   <input type="text" name="nivel" placeholder="nivel"><br>

   duracion:
    <input type="text" name="dura" placeholder="duracion"><br>
  
   clave:
   <input type="text" name="clave" placeholder="clave"><br>

   maestro:
   <input type="text" name="maes" placeholder="maestro"><br>  
   
    dia:
    <input type="text" name="dia" placeholder="dia"><br>

    costo:
   <input type="text" name="costo" placeholder="costo"><br>

   unidad:
   <input type="text" name="unidad" placeholder="unidad"><br>

   aula:
    <input type="text" name="aula" placeholder="aula"><br>
  
   telefono:
   <input type="text" name="tel" placeholder="telefono"><br>

   email:
   <input type="text" name="email" placeholder="email"><br>  
   
   <br><input type="submit" value="Agregar Idiomas">
   
   </form><br>
   <button><a href="idiomas.php">Buscar Idiomas</a></button>
</div>
</body>
</html>

