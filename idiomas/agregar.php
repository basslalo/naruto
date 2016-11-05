<?php
include('conexion.php')
?>
<?php

$mat=$_POST['mat'];
$nivel=$_POST['nivel'];
$dura=$_POST['dura'];
$clave=$_POST['clave'];
$maes=$_POST['maes'];
$dia=$_POST['dia'];
$costo=$_POST['costo'];
$unidad=$_POST['unidad'];
$aula=$_POST['aula'];
$tel=$_POST['tel'];
$email=$_POST['email'];

   if($mat=="")
{
   echo"<script>alert('Falta materia'); window.location='insertar.php';</script>";
}
else if($nivel=="")
 {
    echo"<script>alert('Faltan nivel'); window.location='insertar.php';</script>";
}
else if($dura=="")
 {
    echo"<script>alert('Falta duracion'); window.location='insertar.php';</script>";
}
else if($clave=="")
 {
    echo"<script>alert('Falta clave'); window.location='insertar.php';</script>";
}
else if($maes=="")
 {
    echo"<script>alert('Falta maestro'); window.location='insertar.php';</script>";
}
else if($dia=="")
 {
    echo"<script>alert('Faltan dias'); window.location='insertar.php';</script>";
}
else if($costo=="")
 {
    echo"<script>alert('Falta costo'); window.location='insertar.php';</script>";
}
else if($unidad=="")
 {
    echo"<script>alert('Falta unidad'); window.location='insertar.php';</script>";
}
else if($aula=="")
 {
    echo"<script>alert('Falta aula'); window.location='insertar.php';</script>";
}
else if($tel=="")
 {
    echo"<script>alert('Falta telefono'); window.location='insertar.php';</script>";
}
else if($email=="")
 {
    echo"<script>alert('Falta email'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into idiomas values('','$mat','$nivel', '$dura','$clave', '$maes', '$dia', '$costo', '$unidad', '$aula', '$tel', '$email')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='idiomas.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
