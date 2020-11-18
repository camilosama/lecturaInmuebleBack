<?php

include('conexion.php');

$data = file_get_contents("../data-1.json");
$products = json_decode($data, true);
foreach ($products as $product) {
    mysqli_query($conexion,"INSERT INTO datosgenerales (id,direccion,ciudad,telefono,codigo_postal,tipo,precio) 
    VALUES (".$product['Id'].",'".$product['Direccion']."','".$product['Ciudad']."','".$product['Telefono']."',".$product['Codigo_Postal'].",'".$product['Tipo']."','".$product['Precio']."')");	
}
?>
