<?php 

   
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $contraseña = $_POST["pass"];


    
    $inc = require "conexion/conexion_database.php";
    if($inc){

        $consulta = "INSERT INTO usuarios VALUES ('$nombre','$contraseña','$email', '$telefono')";
        $results = mysqli_query($conn, $consulta);

        echo ("Usuario creado <br>");
        echo ("<a href=\"index.php\"><button>Volver</button></a>");

       
    }


?>