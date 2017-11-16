
<?php
  function conexion(){

    $con = mysql_connect(“localhost”,”root”,”root”);

    if (!$con){
        die(‘Could not connect: ‘ . mysql_error());
    }
echo 'Conectado satisfactoriamente';
    mysql_select_db(“EDITABORRA”, $con);

    return($con);
  }
?>
