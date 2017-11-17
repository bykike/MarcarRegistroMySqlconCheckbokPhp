<?php

  include 'conexion.php';
  /* Uso a modo de función */
  $link = conexion();
  $result = mysqli_query($link, "SELECT * FROM Usuarios");

?>

<!DOCTYPE html>
<html>
<body>
<h1>Actualizar datos</h1>

<form method="post" action="actualizar.php">

  <table border="1">

    <tr>
    <th>Visible</th>
    <th>Email</th>
    <th>Activo</th>
    </tr>

  <?php
  while (($fila = mysqli_fetch_array($result))!=NULL){
  ?>
    <tr>
    <th><input type="checkbox" name="casilla[]" value="<?php echo $fila[email]; ?>" <?php if ($fila[activo] == 1){
        echo "checked='checked'";
      } ?>  > </th>
    <th><?php echo $fila[email]; ?></th>
    <th><?php echo $fila[activo]; ?></th>
    </tr>
  <?php
  }
  ?>
  </table>
<input type="submit" value="Actualizar" />
</form>

</body>
</html>
