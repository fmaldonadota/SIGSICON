<?php

        session_start();
        
include("conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$nombre= $_POST["nombre"];
$tel_fijo= $_POST["tel_fijo"];
$email= $_POST["email"];
$porque= $_POST["porque"];




$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");




$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");



  $sql= "insert into comentarios values('','$nombre','$email','$tel_fijo','$porque')"; 
  $result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
          
          echo "<script>alert('Se ingreso su registro, en un momento nos comunicaremos con usted')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '/newsicon/index.html'"; 
              echo "</script>";
      

       


 ?>