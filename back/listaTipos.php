<?php

include('conexion.php');

$sql = "SELECT tipo FROM datosgenerales GROUP BY tipo  ORDER BY tipo";
$result = mysqli_query($conexion, $sql);

  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value=".$row["tipo"].">".utf8_encode($row["tipo"])."</option>";
  }

mysqli_close($conexion);

?>