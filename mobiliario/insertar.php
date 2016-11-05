<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head>
<div class="imagen">
  <img src="img/mue.png"  width="1350 px" height="230 px" >
 </div>
   <title>insertar Mobiliario</title>
</head>
<body background="img/esc.jpg">
<div class="materias" align="center">
   <form name="f6" action="agregar.php" method="post"><br>

   sillas:
   <input type="text" name="sillas" placeholder="sillas"><br>

   mesas:
   <input type="text" name="mesas" placeholder="mesas"><br>
  
   Equipo computo:
   <input type="text" name="eqcom" placeholder="Equipocomputo"><br>

   escaner:
   <input type="text" name="esca" placeholder="escaner"><br>  
   
    impresora:
    <input type="text" name="impre" placeholder="impresora"><br>

    copiadora:
   <input type="text" name="copi" placeholder="copiadora"><br>

   fax:
   <input type="text" name="fax" placeholder="fax"><br>

   telefono:
    <input type="text" name="tel" placeholder="telefono"><br>
  
   canon:
   <input type="text" name="canon" placeholder="canon"><br>

   escoba:
   <input type="text" name="esco" placeholder="escoba"><br>  
   
    garrafon:
    <input type="text" name="garra" placeholder="garrafon"><br>

    trapeador:
    <input type="text" name="tra" placeholder="trapeador"><br>

   <br><input type="submit" value="Agregar Mobiliario">
   
   </form><br>
   <button><a href="mobiliario.php">Buscar en mobiliario</a></button>
</div>
</body>
</html>

