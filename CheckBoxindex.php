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

<form method="post" action="actualizar.php" onsubmit="return confirmation()">

  <table border="1">

    <tr>
    <th>Visible</th>
    <th>Email</th>
    <th>Activo</th>
    <th>Eliminar</th>
    </tr>

  <?php
  while (($fila = mysqli_fetch_array($result))!=NULL){
  ?>
    <tr>
    <!-- Aquí tratamos el campo que nos dice si ha pagado y está visible -->
    <th><input type="checkbox" name="casilla[]" value="<?php echo $fila[email]; ?>" <?php if ($fila[activo] == 1){
        echo "checked='checked'";
      } ?>  > </th>

    <th><?php echo $fila[email]; ?></th>
    <th><?php echo $fila[activo]; ?></th>
    <!-- Aquí tratamos el campo que tendremos que borrar -->
      <th><input type="checkbox" name="borrado[]" value="<?php echo $fila[email]; ?>" > </th>
    </tr>
  <?php
  }
  ?>
  </table>
  <input type="submit" value="Actualizar registro de la Base de Datos" />



</form>

<script type="text/javascript">
    function confirmation() {
        if(confirm("Realmente desea eliminar?"))
        {
            return true;
        }
        return false;
    }
</script>

</body>
</html>
