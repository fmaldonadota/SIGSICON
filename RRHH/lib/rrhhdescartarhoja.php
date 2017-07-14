<?php


include("conexion.php");
$objeto_conectar=new conectar;
$objeto_conectar->conexion();

$id=$_GET['id'];

$sql= " UPDATE reg_empleados set ESTADO='0' where ID_REG_EMPLEADOS='$id';";


$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());
$numero_filas = mysql_num_rows($result);

   echo "<script>alert('Se descarto la Hoja de vida')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '/RRHH/rrhhpostulantes.php'"; 
              echo "</script>";
     
?>

