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

    //$usu = $_GET["id_usu"]; comentada porque se está usando en linea 5
    $tipo_servi = $_GET["tipo_servicio"];
    $descripcion = $_GET["descripcion"];
    $precio = $_GET["precio_servicio"];
    $fecha = $_GET["fecha"];
    $id_vehi = $_GET["id_vehiculo"]; //sobra aquí
    $id_servicio = $_GET["id_servicio"];
    $nombre_usu = $_GET["nombre_usu"];
    $nombre_servicio = $_GET["nombre_servicio"];

    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "UPDATE servicios SET Precio = $precio, tipo_servicio = '$tipo_servi', descripcion = '$descripcion', fecha = '$fecha' WHERE ID_Servicio = $id_servicio";
        $results = mysqli_query($conn, $consulta);
        if($results){
            echo ("Datos cambiados con total éxito: ".$nombre."<br>"); //sobra
            echo ($id_vehi. $usu); //sobra
            header("Location:detalles_servicios.php?id_servicio=$id_servicio&nombre_servicio=$nombre_servicio&precio_servicio=$precio&nombre_usu=$nombre_usu&id_usu=$usu&id_vehiculo=$id_vehi");
        }
        else{
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>