<?php 

    $usu = $_GET["id_usu"];
    $tipo_servi = $_GET["tipo_servicio"];
    $descripcion = $_GET["descripcion"];
    $precio = $_GET["precio_servicio"];
    $fecha = $_GET["fecha"];
    $id_vehi = $_GET["id_vehi"]; //sobra aquí
    $id_servicio = $_GET["id_servicio"];
    $nombre_usu = $_GET["nombre_usu"];
    $nombre_servicio = $_GET["nombre_servicio"];



    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "UPDATE servicios SET Precio = $precio, tipo_servicio = '$tipo_servi', descripcion = '$descripcion', fecha = '$fecha' WHERE ID_Servicio = $id_servicio";
        $results = mysqli_query($conn, $consulta);
        if($results){
            echo ("Datos cambiados con total éxito: ".$nombre."<br>");
            header("Location:detalles_servicios.php?id_servicio=$id_servicio&nombre_servicio=$nombre_servicio&precio_servicio=$precio&nombre_usu=$nombre_usu&id_usu=$usu&id_vehiculo=$id_vehi");
        }
        else{
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>