<?php 

    $usu = $_POST["id_usu"];
    $tipo_servi = $_POST["tipo_servicio"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio_servicio"];
    $fecha = $_POST["fecha"];
    $id_vehi = $_POST["id_vehi"]; //sobra aquí
    $id_servicio = $_POST["id_servicio"];



    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "UPDATE servicios SET Precio = $precio, tipo_servicio = '$tipo_servi', descripcion = '$descripcion', fecha = '$fecha' WHERE ID_Servicio = $id_servicio";
        $results = mysqli_query($conn, $consulta);
        if($results){
            echo ("Datos cambiados con total éxito: ".$nombre."<br>");
            header("Location:detalles_servicios.php");
        }
        else{
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>