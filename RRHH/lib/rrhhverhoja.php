<?php


include("conexion.php");
$objeto_conectar=new conectar;
$objeto_conectar->conexion();

$id=$_GET['id'];
$sql= "Select * from reg_empleados where ID_REG_EMPLEADOS='$id'";
$result=mysql_query($sql,$objeto_conectar->getLink()) or die (mysql_error());
$numero_filas = mysql_num_rows($result);
while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {



    $ID_REG_EMPLEADOS=$fila['ID_REG_EMPLEADOS'];
    $NOMBRE_EMP=$fila['NOMBRE_EMP'];
    $TELEFONO_EMP=$fila['TELEFONO_EMP'];
    $TELEFONO_CEL_EMP=$fila['TELEFONO_CEL_EMP'];
    $PAIS_EMP=$fila['PAIS_EMP'];
    $CIUDAD_EMP=$fila['CIUDAD_EMP'];
    $EMAIL_EMP=$fila['EMAIL_EMP'];
    $EDAD_EMP=$fila['EDAD_EMP'];
    $HOBBIE=$fila['HOBBY'];
    $DESCRIPCION_EMP=$fila['DESCRIPCION_EMP'];
    $CARGO=$fila['CARGO'];
    $SITUACION_LABORAL=$fila['SITUACION_LABORAL'];
    $PORQUE_EMP=$fila['PORQUE_EMP'];
    $HOJA_VIDA=$fila['HOJA_VIDA'];
    $FECHA_INGRESO=$fila['FECHA_INGRESO'];
    $ESTUDIOS=$fila['ESTUDIOS'];

}


$data=array();

$data['ID_REG_EMPLEADOS']=utf8_encode($ID_REG_EMPLEADOS);
$data['NOMBRE_EMP']=utf8_encode($NOMBRE_EMP);
$data['TELEFONO_EMP']=utf8_encode($TELEFONO_EMP);
$data['TELEFONO_CEL_EMP']=utf8_encode($TELEFONO_CEL_EMP);
$data['PAIS_EMP']=utf8_encode($PAIS_EMP);
$data['CIUDAD_EMP']=utf8_encode($CIUDAD_EMP);
$data['EMAIL_EMP']=utf8_encode($EMAIL_EMP);
$data['EDAD_EMP']=utf8_encode($EDAD_EMP);


$data['HOBBIE']=utf8_encode($HOBBIE);
$data['DESCRIPCION_EMP']=utf8_encode($DESCRIPCION_EMP);
$data['CARGO']=utf8_encode($CARGO);
$data['SITUACION_LABORAL']=utf8_encode($SITUACION_LABORAL);
$data['PORQUE_EMP']=utf8_encode($PORQUE_EMP);

$data['HOJA_VIDA']=utf8_encode($HOJA_VIDA);
$data['FECHA_INGRESO']=utf8_encode($FECHA_INGRESO);
$data['ESTUDIOS']=utf8_encode($ESTUDIOS);

echo json_encode($data); //esto es enviado al success de la funcion ajax

?>