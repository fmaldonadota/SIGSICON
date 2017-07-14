<?php


 session_start();
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();



$id=$_POST['id'];
$nombre=$_POST['persona'];

date_default_timezone_set('America/Bogota');
$time = time();
$hoy = date("Y-m-d H:i:s", $time);

                            
             
$sql= "UPDATE actividades SET PERSONA_DESIGNADA = '$nombre' WHERE ID_ACTIVIDAD='$id';";

$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());


      echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/itgestionservicio.php'"; 
            echo "</script>";
     

     
?>

