<?php
include('conexion.php')
?>

<!DOCTYPE html>
<html>
<head>
  
</head>
<body background="esc.jpg">
<div class="agregar" align="center">
  <?php

$nom=$_POST['nom'];
$cam=$_POST['cam'];
$cla=$_POST['cla'];
$zona=$_POST['zona'];
$sec=$_POST['sec'];
$niv=$_POST['niv'];
$tipo=$_POST['tipo'];
$email=$_POST['email'];
$cap=$_POST['cap'];
$pag=$_POST['pag'];
$red=$_POST['red'];
$rfc=$_POST['rfc'];
$cue=$_POST['cue'];
$calle=$_POST['calle'];
$nume=$_POST['nume'];
$col=$_POST['col'];
$cp=$_POST['cp'];

   if($nom=="")
{
   echo"<script>alert('Falta nombre'); window.location='insertar.php';</script>";
}
else if($cam=="")
 {
    echo"<script>alert('Falta campus'); window.location='insertar.php';</script>";
}
else if($cla=="")
 {
    echo"<script>alert('Falta clave'); window.location='insertar.php';</script>";
}
else if($zona=="")
 {
    echo"<script>alert('Falta zona'); window.location='insertar.php';</script>";
}
else if($sec=="")
{
   echo"<script>alert('Falta sector'); window.location='insertar.php';</script>";
}
else if($niv=="")
 {
    echo"<script>alert('Faltan nivel'); window.location='insertar.php';</script>";
}
else if($tipo=="")
 {
    echo"<script>alert('Falta tipo'); window.location='insertar.php';</script>";
}
else if($email=="")
 {
    echo"<script>alert('Falta e-mail'); window.location='insertar.php';</script>";
}
else if($cap=="")
 {
    echo"<script>alert('Falta capacidad maxima'); window.location='insertar.php';</script>";
}
else if($pag=="")
 {
    echo"<script>alert('Falta pagina'); window.location='insertar.php';</script>";
}
else if($red=="")
{
   echo"<script>alert('Falta red social'); window.location='insertar.php';</script>";
}
else if($rfc=="")
 {
    echo"<script>alert('Faltan rfc'); window.location='insertar.php';</script>";
}
else if($cue=="")
 {
    echo"<script>alert('Falta cuenta'); window.location='insertar.php';</script>";
}
else if($calle=="")
{
   echo"<script>alert('Falta calle'); window.location='insertar.php';</script>";
}
else if($nume=="")
 {
    echo"<script>alert('Faltan numero de calle'); window.location='insertar.php';</script>";
}
else if($col=="")
 {
    echo"<script>alert('Falta colonia'); window.location='insertar.php';</script>";
}
else if($cp=="")
 {
    echo"<script>alert('Falta CP'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into escuela values('','$nom','$cam','$cla','$zona','$sec','$niv','$tipo','$email','$cap','$pag','$red','$rfc','$cue','$calle','$nume','$col','$cp')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='escuela.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>

</div>

</body>
</html>
