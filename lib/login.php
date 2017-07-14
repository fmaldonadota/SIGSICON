<?php

session_start();

include("conexion.php"); 
$objeto_conectar=new conectar; 
$objeto_conectar->conexion();

$login = $_POST["login"];
$password = $_POST["password"];


$hoy = date("d")."/".date("m")."/".date("Y");
$hora = date("G").":".date("i");


$sql= "select * from usuarios where NOMBRE_USUARIO='".$login."'and CONTRASENA='".$password."'";
	$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error()); 
        $numero_filas = mysql_num_rows($result);
        
if($numero_filas>0){
    $_SESSION['sesion']=$_POST['login'];
    
  while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
     
   $nombre=$fila['NOMBRE_APELLIDO_USUARIO'];
    $nivel=$fila['ID_TIPO_USUARIO'];


  }
  
    if($nivel=='1'){




         echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/RRHH/'"; 
            echo "</script>";
        


    }
     if($nivel=='2'){



        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/'"; 
            echo "</script>";
        
      

    }
     if($nivel=='3'){



        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/index_1.php'"; 
            echo "</script>";
        
    

    }
     if($nivel=='4'){


        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/RRHH/'"; 
            echo "</script>";
        
    

    }
      if($nivel=='5'){



        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/'"; 
            echo "</script>";
        
      

    }
      if($nivel=='6'){



        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/'"; 
            echo "</script>";
        
      

    }
      if($nivel=='9'){



        echo '<script>alert(" Registro Correcto\\n Bienvenido Sr(a). '.$nombre.'")</script>';
        echo "<script language='JavaScript'>"; 
            echo "location = '/gobiernoIT/'"; 
            echo "</script>";
     
    }
      
}
else{
    
   echo '<script>alert(" Usuario o Password Incorrecto \\n Vuelva a ingresar")</script>';
            echo "<script language='JavaScript'>"; 
            echo "location = '/login/'"; 
            echo "</script>";


}

        
?>