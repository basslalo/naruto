<?php
include('conexion.php')
?>
<?php

$n=$_POST['nom'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$con=$_POST['num_con'];
$curp=$_POST['curp'];
$edad=$_POST['edad'];
$nacio=$_POST['nacio'];
$sexo=$_POST['sexo'];
$car=$_POST['car'];
$naci=$_POST['naci'];
$sem=$_POST['sem'];
$tel_casa=$_POST['tel_casa'];
$tel_cel=$_POST['tel_cel'];
$rfc=$_POST['rfc'];
$calle=$_POST['calle'];
$num=$_POST['num'];
$col=$_POST['col'];
$cp=$_POST['cp'];

   if($n=="")
{
   echo"<script>alert('Falta Nombre'); window.location='insertar.php';</script>";
}

else if($ap=="")
 {
   echo"<script>alert('Falta ap'); window.location='insertar.php';</script>";
}
else if($am=="")
 {
    echo"<script>alert('Falta am'); window.location='insertar.php';</script>";
}
else if($con=="")
 {
    echo"<script>alert('Falta numero de control'); window.location='insertar.php';</script>";
}
else if($curp=="")
 {
    echo"<script>alert('Falta curp'); window.location='insertar.php';</script>";
}
else if($edad=="")
 {
    echo"<script>alert('Falta edad'); window.location='insertar.php';</script>";
}
else if($nacio=="")
 {
    echo"<script>alert('Falta Nacionalidad'); window.location='insertar.php';</script>";
}
else if($sexo=="")
 {
    echo"<script>alert('Falta sexo'); window.location='insertar.php';</script>";
}
else if($car=="")
 {
    echo"<script>alert('Falta carrera'); window.location='insertar.php';</script>";
}
else if($naci=="")
 {
    echo"<script>alert('Falta Fecha de Nacimiento'); window.location='insertar.php';</script>";
}
else if($sem=="")
 {
    echo"<script>alert('Falta semestre'); window.location='insertar.php';</script>";
}
else if($tel_casa=="")
 {
    echo"<script>alert('Falta telefono de casa'); window.location='insertar.php';</script>";
}
else if($tel_cel=="")
 {
    echo"<script>alert('Falta telefono Celular'); window.location='insertar.php';</script>";
}
else if($rfc=="")
 {
    echo"<script>alert('Falta rfc'); window.location='insertar.php';</script>";
}
else if($calle=="")
 {
    echo"<script>alert('Falta calle'); window.location='insertar.php';</script>";
}
else if($num=="")
 {
    echo"<script>alert('Falta numero de calle'); window.location='insertar.php';</script>";
}
else if($col=="")
 {
    echo"<script>alert('Falta colonia'); window.location='insertar.php';</script>";
}
else if($cp=="")
 {
    echo"<script>alert('Falta cp'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into alumnos values('','$n','$ap','$am','$con','$curp','$edad','$nacio','$sexo','$car','$naci','$sem','$tel_casa','$tel_cel','$rfc','$calle','$num','$col','$cp')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='listadealumnos.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
