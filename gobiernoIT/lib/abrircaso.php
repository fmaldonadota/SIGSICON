<?php


 session_start();
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$id=$_GET['id'];

$sql= " UPDATE actividades set ESTADO_ACTIVIDAD='0' where ID_ACTIVIDAD='$id';";


$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());
$numero_filas = mysql_num_rows($result);

             echo "<script language='JavaScript'>"; 
              echo "location = '/gobiernoIT/casoscerradosmod.php'"; 
              echo "</script>";
     
?>

