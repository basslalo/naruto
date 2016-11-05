<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head >
<div class="imagen">
  <img src="img/profe.jpg"  width="1300 px" height="200 px" >
 </div>
   <title>insertar profesor</title>
</head>
<body background="img/pro.jpg">
<div class="formulario" align="center">

<h1>REGISTRO</h1>
     
     <form name="f2" action="agregar.php" method="post"><br>

   Nombre:
   <input type="text" name="nom" placeholder="Nombre"><br>

   Apelliedo Paterno:
   <input type="text" name="ap" placeholder="Apelliedo Paterno"><br>
   
   Apellido Materno:
   <input type="text" name="am" placeholder="Apelliedo Materno"><br>

   Direccion:
   <input type="text" name="dir" placeholder="Direccion"><br>

   CURP:
    <input type="text" name="curp" placeholder="CURP"><br>
  
   Nacionalidad:
   <input type="text" name="nacio" placeholder="Nacionalidad"><br>

   Edad:
   <input type="text" name="edad" placeholder="Edad"><br>  
   
    Fecha de nacimiento:
    <input type="text" name="naci" placeholder="Fecha de Nacimiento"><br>

   Sexo:
   <input type="text" name="sexo" placeholder="Sexo"><br>
   
   Telefono casa:
   <input type="text" name="tel_casa" placeholder="Telefono de casa"><br>
   
   Telefono cel:
    <input type="text" name="tel_cel" placeholder="Telefono Celular"><br>

   RFC:
   <input type="text" name="rfc" placeholder="RFC"><br>

   <br><input type="submit" value="Agregar Profesor">
   
   </form><br>

   <button><a href="listadeprofesor.php">Buscar Profesor</a></button>

</div>


</body>
</html>

