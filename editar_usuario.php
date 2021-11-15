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

    // $usu = $_GET["id_usu"]; comentada porque ya está usada en la línea 5
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];


    
    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "UPDATE usuarios SET Nombre = '$nombre', Email='$email', Telefono='$telefono' WHERE ID_Usuario='$usu'";
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