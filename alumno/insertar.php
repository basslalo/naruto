<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head>
<div class="imagen">
  <img src="img/est.png"  width="1300 px" height="200 px" >
 </div>
   <title>insertar alumnos</title>
</head>
<body background="img/esc.jpg">
<div class="tabla" align="center">
   <form name="f1" action="agregar.php" method="post"><br>

   <h1>REGISTRO ALUMNO</h1>

   nombre:
   <input type="text" name="nom" placeholder="Nombre"><br>

   Apelliedo Paterno:
   <input type="text" name="ap" placeholder="Apelliedo Paterno"><br>
   
   Apellido Materno:
   <input type="text" name="am" placeholder="Apelliedo Materno"><br>

   Numero control:
    <input type="text" name="num_con" placeholder="Numero de control"><br>
   
   CURP:
    <input type="text" name="curp" placeholder="CURP"><br>
   
   Edad:
   <input type="text" name="edad" placeholder="Edad"><br>  
   
   nacionalidad:
   <input type="text" name="nacio" placeholder="Nacionalidad"><br>
   
   sexo:
   <input type="text" name="sexo" placeholder="Sexo"><br>
   
   carrera:
   <input type="text" name="car" placeholder="Carrera"><br>
   
   fecha de nacimiento:
    <input type="text" name="naci" placeholder="Fecha de Nacimiento"><br>
   
   semestre:
   <input type="text" name="sem" placeholder="Semestre"><br>
   
   telefono casa:
   <input type="text" name="tel_casa" placeholder="Telefono de casa"><br>
   
   telefono cel:
    <input type="text" name="tel_cel" placeholder="Telefono Celular"><br>

   rfc:
   <input type="text" name="rfc" placeholder="RFC"><br>

   calle:
   <input type="text" name="calle" placeholder="calle"><br>

   numero:
   <input type="text" name="num" placeholder="numero"><br>

   colonia:
   <input type="text" name="col" placeholder="colonia"><br>

   cp:
   <input type="text" name="cp" placeholder="CP"><br>

   <br><input type="submit" value="Agregar Alumno">
   </form><br>

   <button><a href="listadealumnos.php">Buscar Alumnos</a></button>
</div>

  

</body>
</html>

