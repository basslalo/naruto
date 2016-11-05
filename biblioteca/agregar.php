<?php
include('conexion.php')
?>
<?php

$sec=$_POST['sec'];
$art=$_POST['art'];
$enc=$_POST['enc'];
$hor=$_POST['hor'];
$tal=$_POST['tal'];
$aut=$_POST['aut'];
$edi=$_POST['edi'];
$edic=$_POST['edic'];
$fic=$_POST['fic'];
$tes=$_POST['tes'];
$for=$_POST['for'];
$gen=$_POST['gen'];
$rev=$_POST['rev'];
$per=$_POST['per'];
$tel=$_POST['tel'];

   if($sec=="")
{
   echo"<script>alert('Falta seccion'); window.location='insertar.php';</script>";
}
else if($art=="")
 {
    echo"<script>alert('Faltan articulos'); window.location='insertar.php';</script>";
}
else if($enc=="")
 {
    echo"<script>alert('Falta encargado'); window.location='insertar.php';</script>";
}
else if($hor=="")
 {
    echo"<script>alert('Falta horario'); window.location='insertar.php';</script>";
}
else if($tal=="")
 {
    echo"<script>alert('Falta taller'); window.location='insertar.php';</script>";
}
else if($aut=="")
 {
    echo"<script>alert('Falta autor'); window.location='insertar.php';</script>";
}
   if($edi=="")
{
   echo"<script>alert('Falta edi'); window.location='insertar.php';</script>";
}
else if($edic=="")
 {
    echo"<script>alert('Faltan edicion'); window.location='insertar.php';</script>";
}
else if($fic=="")
 {
    echo"<script>alert('Falta ficha bibliografia'); window.location='insertar.php';</script>";
}
else if($tes=="")
 {
    echo"<script>alert('Falta tesis'); window.location='insertar.php';</script>";
}
else if($for=="")
 {
    echo"<script>alert('Falta formato'); window.location='insertar.php';</script>";
}
else if($gen=="")
 {
    echo"<script>alert('Falta genero'); window.location='insertar.php';</script>";
}
   if($rev=="")
{
   echo"<script>alert('Falta revista'); window.location='insertar.php';</script>";
}
else if($per=="")
 {
    echo"<script>alert('Faltan periodico'); window.location='insertar.php';</script>";
}
else if($tel=="")
 {
    echo"<script>alert('Falta telefono'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into biblioteca values('','$sec','$art','$enc','$hor','tal','$aut','$edi','$edic','$fic','$tes','$for','$gen','$rev','$per','$tel')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='biblioteca.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
