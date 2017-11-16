<?php
include ‘conexion.php’;

$con=conexion();

$x=$_POST[casilla];

foreach ($x as $value){

$res=mysql_query(“delete from menu where androidID=”.$value.””,$con);

if($res){

echo ‘Dato eliminado correctamente<br />’;

}

}

?>

<a href=”CheckBoxindex.php”>Volver</a>
