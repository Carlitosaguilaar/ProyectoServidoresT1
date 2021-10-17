<?php 

   
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $año_fabri = $_POST["año_fabri"];
    $usuu = $_POST["id_usu"];
    


    
    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        VALUES ('$matricula','$usuu', '$marca','$modelo', '$año_fabri')";
        $results = mysqli_query($conn, $consulta);
        if($results){

            echo ("<script>alert(\"Vehículo creado con éxito\")</script>");
            header("Location:Vehiculos_copy.php?ID_Usuario=$usu");
        }
        else{
            echo("Ha ocurrido un error inesperado");
        }

       
    }


?>