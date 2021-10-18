<?php 

    $usu = $_POST["id_usu"];
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];

    
    $inc = require "conexion/conexion_database.php";

    if($inc){

        $consulta = "UPDATE vehiculos SET Matricula = '$matricula',Id_usuario='$usu', Marca='$marca', Modelo='$telefono' WHERE Matricula='$matricula'";
        $results = mysqli_query($conn, $consulta);
        
        if($results){

            echo ("Datos cambiados con total éxito <br>");
            echo ("<a href=\"Vehiculos_copy.php?ID_Usuario=$matricula\"><button>Volver</button></a>");
        }
        
        else{
            
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>
