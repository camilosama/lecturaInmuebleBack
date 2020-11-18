<ul class="collection">
<?php

include('conexion.php');

$ciudad = $_POST['ciudad'];
$tipo = $_POST['tipo'];

if ($_POST['ciudad']) { 
    $condicional = "where ciudad  = '$ciudad' AND tipo ='$tipo'";
}else{
    $condicional ="";
}

$sql = "SELECT * FROM datosgenerales $condicional  ORDER BY id";
$result = mysqli_query($conexion, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $id=$row["id"];
?>
      <li class="collection-item">
        <div class="row">
            <div class="col s12 m2 l4">
                <img src="https://picsum.photos/140/160"></img>
            </div>
            <div class="col s12 m8 l9">
                <div class="card">
                    <span class="card-title" style="color: black; font-size:20px"> Predio: <?php echo $row["id"]." <br> Ciudad: ".$row["ciudad"] ?> <br> Direccion:<?php echo $row["direccion"] ?><br> Tipo:<?php echo $row["tipo"] ?></span>
                    <div class="card-content">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <i class="material-icons circle" onclick="addBien(<?php echo $id ?>)" >Guardar</i>
                                <p>
                                    Codigo Postal: <?php echo $row["codigo_postal"] ?><br>
                                    Precio: <?php echo $row["precio"] ?><br>
                                    Telefono: <?php echo $row["telefono"] ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </li>
<?php
}
mysqli_close($conexion);
?>
</ul>