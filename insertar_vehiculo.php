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

   
    $matricula = $_GET["matricula"];
    $marca = $_GET["marca"];
    $modelo = $_GET["modelo"];
    $año_fabri = $_GET["año_fabri"];
    //$usu = $_GET["id_usu"]; comentada porque se está usando en línea 5
    


    
    $inc = require "conexion_database.php";
    if($inc){

        /*$consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        VALUES ('$matricula','$usuu', '$marca','$modelo', '$año_fabri')";
        $results = mysqli_query($conn, $consulta);*/


        if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
        }

        echo "Connected successfully.";

        // $consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        // VALUES ('$matricula','$usu', '$marca','$modelo', '$año_fabri')";

        // $results = mysqli_query($conn, $consulta);
        $results = insert_vehiculos($conn, $matricula, $usu, $marca, $modelo, $año_fabri);

        if ($results === false) {
        echo mysqli_error($conn);
        echo("Ha ocurrido un error inesperado");
        } 
        else {
        //$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

        header("Location:Vehiculos_copy.php?ID_Usuario=$usu");
        //acción
        }
    
       
    }


?>