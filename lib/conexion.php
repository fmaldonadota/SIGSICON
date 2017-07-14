<?php 
class conectar{ 
var $servidor="localhost"; 
var $usuario="root"; 
var $pass=""; 
var $data="siconweb"; 
var $link; 

function conexion(){ 
$link=mysql_connect($this->servidor,$this->usuario,$this->pass)or die (mysql_error()); 
mysql_select_db($this->data,$link) or die (mysql_error()); 
if ($link){ 
$this->setLink($link);//asigna el valor a link 
}else{ 
echo "La conexion no tuvo exitó"; 
$this->setLink(false);//asigna valor a link 
} 
} 

function setLink($valor) {//para asignar valor a link 
    $this->link = $valor; 
} 

function getLink() {//para obtener el valor de link 
    return $this->link; 
} 

} 
?>