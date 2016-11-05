<?php
include('conexion.php')
?>
<?php

$n=$_POST['nom'];
$cr=$_POST['cre'];
$cla=$_POST['cla'];
$gru=$_POST['gru'];
$sal=$_POST['sal'];
$hor=$_POST['hor'];

   if($n=="")
{
   echo"<script>alert('Falta Nombre'); window.location='insertar.php';</script>";
}
else if($cr=="")
 {
    echo"<script>alert('Faltan creditos'); window.location='insertar.php';</script>";
}
else if($cla=="")
 {
    echo"<script>alert('Falta clave'); window.location='insertar.php';</script>";
}
else if($gru=="")
 {
    echo"<script>alert('Falta grupo'); window.location='insertar.php';</script>";
}
else if($sal=="")
 {
    echo"<script>alert('Falta salon'); window.location='insertar.php';</script>";
}
else if($hor=="")
 {
    echo"<script>alert('Falta Horas'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into materia values('','$n','$cr', '$cla','$gru','$sal', '$hor')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='listademateria.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
