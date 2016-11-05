<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html>
<head>
<div class="imagen" >
  <img src="img/biblio.jpg"  width="1350 px" height="200 px">
 </div>
   <title>Insertar a Biblioteca</title>
</head>
<body background="img/esc.jpg">
<div class="tabla" align="center">
  <form name="f3" action="agregar.php" method="post"><br>

   seccion:
   <input type="text" name="sec" placeholder="seccion"><br>

   articulo:
   <input type="text" name="art" placeholder="articulo"><br>

   encargado:
    <input type="text" name="enc" placeholder="encargado"><br>
  
   horario:
   <input type="text" name="hor" placeholder="horario"><br>

   taller:
   <input type="text" name="tal" placeholder="taller"><br>  
   
    autor:
    <input type="text" name="aut" placeholder="autor"><br>

    editorial:
   <input type="text" name="edi" placeholder="editorial"><br>  
   
    edicion:
    <input type="text" name="edic" placeholder="edicion"><br>

    ficha:
   <input type="text" name="fic" placeholder="ficha"><br>  
   
    tesis:
    <input type="text" name="tes" placeholder="tesis"><br>

    formato:
   <input type="text" name="for" placeholder="formato"><br>  
   
    genero:
    <input type="text" name="gen" placeholder="genero"><br>

    revista:
   <input type="text" name="rev" placeholder="revista"><br>  
   
    periodico:
    <input type="text" name="per" placeholder="periodico"><br>

    telefono:
   <input type="text" name="tel" placeholder="telefono"><br>

   <br><input type="submit" value="Agregar A Biblioteca">
   
   </form><br>
   <button><a href="biblioteca.php">Buscar en Biblioteca</a></button>
</div>
   
</body>
</html>

