<?php
include('conexion.php')
?>
<?php

$n=$_POST['nom'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$d=$_POST['dir'];
$curp=$_POST['curp'];
$nacio=$_POST['nacio'];
$edad=$_POST['edad'];
$naci=$_POST['naci'];
$sexo=$_POST['sexo'];
$tel_casa=$_POST['tel_casa'];
$tel_cel=$_POST['tel_cel'];
$rfc=$_POST['rfc'];

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
else if($d=="")
 {
    echo"<script>alert('Falta direccion'); window.location='insertar.php';</script>";
}
else if($curp=="")
 {
    echo"<script>alert('Falta curp'); window.location='insertar.php';</script>";
}
else if($nacio=="")
 {
    echo"<script>alert('Falta Nacionalidad'); window.location='insertar.php';</script>";
}
else if($edad=="")
 {
    echo"<script>alert('Falta edad'); window.location='insertar.php';</script>";
}
else if($naci=="")
 {
    echo"<script>alert('Falta Fecha de Nacimiento'); window.location='insertar.php';</script>";
}
else if($sexo=="")
 {
    echo"<script>alert('Falta sexo'); window.location='insertar.php';</script>";
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
else
{
   $sql="insert into profesor values('','$n','$ap','$am','$d', '$curp','$nacio','$edad', '$naci','$sexo', '$tel_casa','$tel_cel','$rfc')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='listadeprofesor.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
