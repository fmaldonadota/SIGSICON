<?php

        session_start();
        
include("conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$nombre= $_POST["nombre"];
$tel_fijo= $_POST["tel_fijo"];
$cel= $_POST["cel"];
$edad= $_POST["edad"];
$ciudad= $_POST["ciudad"];
$email= $_POST["email"];
$porque= $_POST["porque"];





$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");



  $sql= "insert into reg_distribuidores values('','$nombre','$tel_fijo','$cel','$edad','$ciudad','$email','$porque')"; 
	$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
          
          echo "<script>alert('Se ingreso su registro, en un momento nos comunicaremos con usted')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '/index.html'"; 
              echo "</script>";
      

       


 ?>