<?php 

    $usu = $_POST["id_usu"];
    $vehi = $_POST["id_Vehi"];
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];

    
    $inc = require "conexion/conexion_database.php";

    if($inc){

        $consulta = "UPDATE vehiculos SET Matricula = '$matricula',Id_usuario='$usu', Marca='$marca', Modelo='$modelo' WHERE ID_vehiculo='$vehi'";
        $results = mysqli_query($conn, $consulta);
        
        if($results){

            echo ("Datos cambiados con total éxito <br>");
            echo ("<a href=\"web_principales/Vehiculos_servicios.php?ID_Usuario=$usu&ID_Vehiculo=$vehi\"><button>Volver</button></a>");
        }
        
        else{
            
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>
