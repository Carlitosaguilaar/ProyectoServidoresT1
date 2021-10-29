<?php 
    //CONTROLAR SESIONES
    session_start();
    if (!$_SESSION['username']){
       header("Location:index.php");
    }
    
?>
<?php 

   
    $matricula = $_GET["matricula"];
    $marca = $_GET["marca"];
    $modelo = $_GET["modelo"];
    $año_fabri = $_GET["año_fabri"];
    $usuu = $_GET["id_usu"];
    


    
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

        $consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        VALUES ('$matricula','$usuu', '$marca','$modelo', '$año_fabri')";

        $results = mysqli_query($conn, $consulta);

        if ($results === false) {
        echo mysqli_error($conn);
        echo("Ha ocurrido un error inesperado");
        } else {
        //$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

        echo ("<script>alert(\"Vehículo creado con éxito\")</script>");
        header("Location:Vehiculos_copy.php?ID_Usuario=$usuu");
        //acción
        }
    
       
    }


?>