<?php


 session_start();
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();



$id=$_POST['id'];
$estado=$_POST['estado'];

date_default_timezone_set('America/Bogota');
$time = time();
$hoy = date("Y-m-d H:i:s", $time);


if ($estado=="En Proceso"){
    

    
    $sql= "UPDATE actividades SET ESTADO = '$estado',FECHA_INICIO='$hoy' WHERE ID_ACTIVIDAD='$id';";

$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());


      echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/itgestionservicio.php'"; 
            echo "</script>";
     
    
}

if ($estado=="Pausado"){
    $sql= "UPDATE actividades SET ESTADO = '$estado',FECHA_INICIO='$hoy' WHERE ID_ACTIVIDAD='$id';";

$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());


      echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/itgestionservicio.php'"; 
            echo "</script>";
     
    
}

if ($estado=="Finalizado"){
    
    $sql= "UPDATE actividades SET ESTADO = '$estado',FECHA_FINALIZACION='$hoy' WHERE ID_ACTIVIDAD='$id';";

$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());


      echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/itgestionservicio.php'"; 
            echo "</script>";
     
}
                            
            
     
?>

