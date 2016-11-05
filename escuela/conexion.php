<?php
$cn=mysql_connect("localhost","usuario", "12345") or die("Error de conexion");
//servidor, nmbre de usuario, contraseña
$db=mysql_select_db("escuela") or die("Error db");
return($cn);

?>