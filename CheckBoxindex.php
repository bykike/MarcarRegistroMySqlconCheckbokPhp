<?php

  $link = new mysqli("localhost","root","root","EDITABORRA");
  if (mysqli_connect_errno()) {
      die("Error al conectar: ".mysqli_connect_error());
  }
  $result = mysqli_query($link, "SELECT * FROM menu");

?>

<!DOCTYPE html>
<html>
<body>

<h1>Eliminar datos</h1>
<!-- https://stips.wordpress.com/2014/03/13/eliminar-multiples-datos-con-checkbox-php-y-mysql/ -->
<form method="post" action="eliminar.php">

<table border="1">

  <tr>
  <th></th>
  <th>androidID</th>
  <th>texto</th>
  </tr>

<?php
#while($fila=mysql_fetch_array($res)){
while (($fila = mysqli_fetch_array($result))!=NULL){
  $valor=$fila[activo];
?>
  <tr>
  <th><input type="checkbox" name="casilla[]" value="<?php echo $fila[activo]; ?>" <?php if ($fila[activo] == 1){
      echo "checked='checked'";
    } ?>  > </th>
  <th><?php echo $fila[androidID]; ?></th>
  <th><?php echo $fila[texto]; ?></th>
  </tr>
<?php
}
?>
</table>
<input type="submit" value="Eliminar" />
</form>

</body>
</html>
