<?php

$nombrearchivo = $_FILES["archivo"]['name'];

move_uploaded_file($_FILES['archivo']['tmp_name'], '../RRHH/HOJAS/' . $_FILES['archivo']['name']);

session_start();
        
include("conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$nombre= $_POST["nombre"];
$tel_fijo= $_POST["tel_fijo"];
$cel= $_POST["cel"];
$pais= $_POST["pais"];
$ciudad= $_POST["ciudad"];
$email= $_POST["email"];
$edad= $_POST["edad"];
$hobbie= $_POST["hobbie"];
$descripcion= $_POST["descripcion"];
$cargo= $_POST["cargo"];
$situacion= $_POST["situacion"];
$porque= $_POST["porque"];

$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");
$educacion= $_POST["educacion"];


$para      = 'rrhh@siconecuador.com';
$titulo    = 'Hoja de vida';
$mensaje   = 'Se a postulado una nueva persona '."\r\n\r\n" 
        . ' Nombre: '.$nombre.' '."\r\n" 
        . ' Usuario: '.$cargo.' '."\r\n" 
        . ' Fecha: '.$hoy.'';

$cabeceras = 'From: info@siconecuador.com' . "\r\n" .
    'Reply-To: sistemas@siconecuador.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($para, $titulo, $mensaje, $cabeceras);

  $sql= "insert into reg_empleados values('','$nombre','$tel_fijo','$cel','$pais','$ciudad','$email','$edad','$hobbie','$descripcion','$cargo','$situacion','$porque','https://www.siconecuador.com/RRHH/HOJAS/$nombrearchivo','$hoy','$educacion','1')"; 
  $result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
          
 
    echo "<script>alert('Se ingreso su registro, en un momento nos comunicaremos con usted')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '/index.html'"; 
              echo "</script>";
              
              
              
              
              
 
 
 ?>