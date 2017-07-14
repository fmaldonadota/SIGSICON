<?php


session_start();
        
include("../lib/conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$area= $_POST["area"];
$usuario= $_POST["usuario"];
$password= $_POST["pass"];
$password2= $_POST["passw"];
$contrasistema= $_POST["contrasistema"];

$cond= $_POST["cond"];

$codigo=1506;


$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");




if($password==$password2){
    
    if($contrasistema==$codigo){
        
        
            
$para      = $correo;
$titulo    = 'Sistema de Mesa de Ayuda';
$mensaje   = 'Bienvenido al Sistema de Mesa de Ayuda de SICON '."\r\n\r\n" 
        . ' Nombre: '.$nombre.' '."\r\n" 
        . ' Usuario: '.$usuario.' '."\r\n" 
        . ' Contraseña: '.$password.' '."\r\n" 
        . ' Fecha: '.$hoy.'';
$cabeceras = 'From: info@siconecuador.com' . "\r\n" .
    'Reply-To: sistemas@siconecuador.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

  $sql= "insert into usuarios values('','$area','$nombre','$correo','$usuario','$password')"; 
  $result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
          
 
    echo "<script>alert('Se ingreso correctamente su Usuario')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '../login/'"; 
              echo "</script>";
              
        
    }else{
        
           echo "<script>alert('Las clave Sistemas no es correcta')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '../RegistroSistema/'"; 
              echo "</script>";
              
    }
    
    
}else {
    
    
      echo "<script>alert('Las claves no son iguales')</script>";
             echo "<script language='JavaScript'>"; 
             echo "location = '../RegistroSistema/'"; 
              echo "</script>";
              
    

    
    
}
   
 ?>