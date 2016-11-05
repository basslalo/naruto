<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head>
 <div class="imagen">
  <img src="img/tuesc.gif"  width="1300 px" height="200 px" >
 </div><br>
   <title>insertar a Escuela</title>
</head>
<body background="img/esc.jpg">

<div class="tabla" align="center">
  
   <form name="f5" action="agregar.php" method="post"><br>

   Nombre:
   <input type="text" name="nom" placeholder="nombre"><br>
  
   campus:
   <input type="text" name="cam" placeholder="campus"><br>

   clave:
   <input type="text" name="cla" placeholder="clave"><br>  
   
    zona:
    <input type="text" name="zona" placeholder="zona"><br>

    sector:
   <input type="text" name="sec" placeholder="sector"><br>  
   
    nivel:
    <input type="text" name="niv" placeholder="nivel"><br>

    tipo:
   <input type="text" name="tipo" placeholder="tipo"><br>  
   
    e-mail:
    <input type="text" name="email" placeholder="e-mail"><br>

    capacidad:
    <input type="text" name="cap" placeholder="capacidad"><br>

    pagina:
   <input type="text" name="pag" placeholder="pagina"><br>  
   
    red social:
    <input type="text" name="red" placeholder="red social"><br>

    RFC:
   <input type="text" name="rfc" placeholder="rfc"><br>  
   
    Cuenta:
    <input type="text" name="cue" placeholder="Cuenta"><br>

    calle:
   <input type="text" name="calle" placeholder="calle"><br>

   numero:
   <input type="text" name="nume" placeholder="numero"><br>

   colonia:
   <input type="text" name="col" placeholder="colonia"><br>

   CP:
   <input type="text" name="cp" placeholder="CP"><br>  

   <br><input type="submit" value="Agregar a Escuela">
   
   </form><br>
   <button><a href="escuela.php">Buscar escuela</a></button>
</div>

</body>
</html>

