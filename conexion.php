
<?php
  function conexion(){
    $link = new mysqli("localhost","root","root","BDUsuarios");
    if (mysqli_connect_errno()) {
        die("Error al conectar: ".mysqli_connect_error());
    }
    return($link);
  }
?>
