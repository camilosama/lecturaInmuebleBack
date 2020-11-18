<?php

include('conexion.php');

$sql = "SELECT ciudad FROM datosgenerales GROUP BY ciudad  ORDER BY ciudad";
$result = mysqli_query($conexion, $sql);

  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value=".$row["ciudad"].">".utf8_encode($row["ciudad"])."</option>";
  }

mysqli_close($conexion);

?>