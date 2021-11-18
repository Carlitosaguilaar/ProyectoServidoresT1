<?php 
    //Traerme las funciones
    require "funciones.php";
    //CONTROLAR SESIONES
    $usu = $_GET["id_usu"];
    session_start();
    if (!isset($usu)){
        header("Location:index.php");
        
    }
    
    if($_SESSION['id'] != $usu && $_SESSION['admin'] == 0){
        header("Location:index.php");
        
    }
    
?>
<?php 

   
    $nombre_servicio = $_GET["nombre_servicio"];
    $precio_servicio = $_GET["precio_servicio"];
    $id_vehiculo = $_GET["id_vehiculo"];
    $id_servicio = $_GET["id_servicio"];
    //$id_usuario = $_GET["id_usu"]; comentada porque se está usando en línea 5
    $fecha = $_GET["fecha"];
    $matricula = $_GET["matricula"]; //no hace falta
    

    $inc = require "conexion_database.php";
    if($inc){

        /*$consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        VALUES ('$matricula','$usuu', '$marca','$modelo', '$año_fabri')";
        $results = mysqli_query($conn, $consulta);*/


        if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
        }

        echo "Connected hecha :D.";

        $consulta = "INSERT INTO servicios (ID_vehiculo, Nombre, fecha)
        VALUES ('$id_vehiculo','$nombre_servicio', '$fecha')";

        $results = mysqli_query($conn, $consulta);

        if ($results === false) {
        echo mysqli_error($conn);
        echo("Ha ocurrido un error inesperado");
        } else {
        //$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

        echo ("<script>alert(\"Servicio creado con éxito\")</script>");
        header("Location:lista_servicios.php?id_vehii=$id_vehiculo&id_usuu=$usu");
        //acción
        }
    }
?>