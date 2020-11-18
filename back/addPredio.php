<?php
    $id=$_POST['id'];
    include('conexion.php');
    
    $sql = "SELECT * FROM datosgenerales WHERE id=$id";
    $result = mysqli_query($conexion, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $id=$row["id"];
        $direccion=$row["direccion"];
        $ciudad=$row["ciudad"];
        $telefono=$row["telefono"];
        $codigo_postal=$row["codigo_postal"];
        $tipo=$row["tipo"];
        $precio=$row["precio"];

        $sql = "INSERT INTO datosguardados (id, direccion, ciudad, telefono, codigo_postal, tipo, precio)
        VALUES ($id, '$direccion', '$ciudad','$telefono',$codigo_postal,'$tipo','$precio')";
        
        if (mysqli_query($conexion, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
 
    }

    mysqli_close($conexion);
?>