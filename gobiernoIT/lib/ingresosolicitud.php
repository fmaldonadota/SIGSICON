<?php


 session_start();
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$area=$_POST['area'];
$prioridad=$_POST['prioridad'];

date_default_timezone_set('America/Bogota');
$time = time();
$hoy = date("Y-m-d H:i:s", $time);

 $email=$_SESSION['sesion'];
                             $sql= "select * from usuarios where NOMBRE_USUARIO='".$email."'";
                             $result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
                              $numero_filas = mysql_num_rows($result); 

                           
                             while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
                              $nombre2=$fila['NOMBRE_USUARIO'];
                         
                              
                            }
                            
                 

$sql= "INSERT INTO actividades (ID_ACTIVIDAD,NOM_ACTIVIDAD,DESCRIP_ACTIVIDAD,AREA_ACTIVIDAD,PRIORIDAD_ACTIVIDAD,ESTADO,FECHA_INGRESO,USUARIO) VALUES ('','$nombre','$descripcion','$area','$prioridad','EN ANALISIS','$hoy','$nombre2');";

$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());


           echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/itingresosolicitud.php'"; 
            echo "</script>";

      
     
?>

