<?php
include('conexion.php')
?>
<?php

$sillas=$_POST['sillas'];
$mesas=$_POST['mesas'];
$eqcom=$_POST['eqcom'];
$esca=$_POST['esca'];
$impre=$_POST['impre'];
$copi=$_POST['copi'];
$fax=$_POST['fax'];
$tel=$_POST['tel'];
$canon=$_POST['canon'];
$esco=$_POST['esco'];
$garra=$_POST['garra'];
$tra=$_POST['tra'];

   if($sillas=="")
{
   echo"<script>alert('Falta sillas'); window.location='insertar.php';</script>";
}
else if($mesas=="")
 {
    echo"<script>alert('Faltan mesas'); window.location='insertar.php';</script>";
}
else if($eqcom=="")
 {
    echo"<script>alert('Falta equipo de computo'); window.location='insertar.php';</script>";
}
else if($esca=="")
 {
    echo"<script>alert('Falta equipo de escaner'); window.location='insertar.php';</script>";
}
else if($impre=="")
 {
    echo"<script>alert('Falta impresoras'); window.location='insertar.php';</script>";
}
else if($copi=="")
 {
    echo"<script>alert('Falta copiadoras'); window.location='insertar.php';</script>";
}
else if($fax=="")
 {
    echo"<script>alert('Faltan fax'); window.location='insertar.php';</script>";
}
else if($tel=="")
 {
    echo"<script>alert('Faltan telefonos'); window.location='insertar.php';</script>";
}
else if($canon=="")
 {
    echo"<script>alert('Falta equipo de cañon'); window.location='insertar.php';</script>";
}
else if($esco=="")
 {
    echo"<script>alert('Falta escobas'); window.location='insertar.php';</script>";
}
else if($garra=="")
 {
    echo"<script>alert('Falta garrafones'); window.location='insertar.php';</script>";
}
else if($tra=="")
 {
    echo"<script>alert('Faltan trapeadores'); window.location='insertar.php';</script>";
}
else
{
   $sql="insert into mobiliario values('','$sillas','$mesas', '$eqcom', '$esca','$impre','$copi', '$fax', '$tel', '$canon', '$esco', '$garra', '$tra')";
   $consulta=mysql_query($sql,$cn);
   if ($consulta) 
   {
      echo"<script>alert('Registro insertado'); window.location='mobiliario.php';</script>";
   }
   else
   {
      echo"Error al insertar";
   }
}

?>
