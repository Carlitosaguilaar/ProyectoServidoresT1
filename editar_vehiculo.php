<?php 

    $usu = $_GET["id_usu"];
    $matricula = $_GET["matricula"];
    $marca = $_GET["marca"];
    $modelo = $_GET["modelo"];
    $año_fabri = $_GET["año_fabri"];
    $id_vehi = $_GET["id_vehi"];
    print_r($id_vehi);


    
    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "UPDATE vehiculos SET Matricula = '$matricula', Marca='$marca', Modelo='$modelo', Año_fabricacion = '$año_fabri' WHERE ID_Vehiculo = $id_vehi";
        $results = mysqli_query($conn, $consulta);
        if($results){
            echo ("Datos cambiados con total éxito: ".$nombre."<br>");
            header("Location:Vehiculos_copy.php?ID_Usuario=$usu");
        }
        else{
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>