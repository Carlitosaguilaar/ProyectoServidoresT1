<?php 

   
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $contraseña = $_GET["pass"];


    
    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "INSERT INTO usuarios (Nombre, Contraseña, Email, Telefono)
        VALUES ('$nombre','$contraseña','$email', '$telefono')";
        $results = mysqli_query($conn, $consulta);

        echo ("Usuario creado <br>");
        header("Location:index.php");
       
    }


?>