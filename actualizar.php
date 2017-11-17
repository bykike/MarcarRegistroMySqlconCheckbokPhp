<?php

  include 'conexion.php';
  $link = conexion(); /* Uso a modo de función */

  var_dump ($EmailCheckbox = $_POST[casilla]);

  /* Inicializamos a 0 el campo activo antes de reescribir los que están a 1 en el checkbox */
  $sql = "UPDATE Usuarios SET activo = 0";
  if(mysqli_query($link, $sql)){
      echo "Los registros se inicializaron perfectamente.";
    } else {
            echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($link);
  } /* End if */

  foreach ($EmailCheckbox as $Email){

    $sql = "UPDATE Usuarios SET activo = 1 WHERE email = '$Email'";
    echo $sql;

    if(mysqli_query($link, $sql)){
        echo "Los registros se grabaron perfectamente.";
    } else {
        echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($link);
    } /* End foreach */

}


/* con este procedimiento borramos todas las seleccionadas
foreach ($x as $value){
  $res=mysql_query(“delete from menu where email=”.$value.””,$link);
  if($res){
          echo ‘Dato eliminado correctamente<br />’;
        }
}
*/

?>

<a href="CheckBoxindex.php">Volver</a>
