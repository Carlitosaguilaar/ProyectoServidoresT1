<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    require 'conexion/conexion_database.php';
 
    $sql = "UPDATE usuarios (Nombre,Contraseña,Email )
            VALUES ('" . $_POST['nombre'] . "','"
                       . $_POST['contra'] . "','"
                       . $_POST['email'] . "')";
 
    $results = mysqli_query($conn, $sql);
 
    if ($results === false) {
 
        echo mysqli_error($conn);
 
    } else {
 
        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
 
    }
 
}
 
?>
