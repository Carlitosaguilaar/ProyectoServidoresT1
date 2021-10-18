<?php 

    $usu = $_POST["id_usu"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];


    
    $inc = require "conexion/conexion_database.php";

    if($inc){

        $consulta = "UPDATE usuarios SET Nombre = '$nombre', Email='$email', Telefono='$telefono' WHERE ID_Usuario='$usu'";
        $results = mysqli_query($conn, $consulta);
        
        if($results){

            echo ("Datos cambiados con total éxito: ".$nombre."<br>");
            echo ("<a href=\"Vehiculos copy.php?ID_Usuario=$usu\"><button>Volver</button></a>");
        }
        
        else{
            
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>
