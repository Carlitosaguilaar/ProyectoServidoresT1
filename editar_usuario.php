<?php 

    $usu = $_POST["id_usu"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];


    
    $inc = require "conexion_database.php";
    if($inc){

        $Datoscambiados = "Datos cambiados con total éxito, ".$nombre."<br>";

        $consulta = "UPDATE usuarios SET Nombre = '$nombre', Email='$email', Telefono='$telefono' WHERE ID_Usuario='$usu'";
        $results = mysqli_query($conn, $consulta);
        if($results){
            echo ("Datos cambiados con total éxito, ".$nombre."<br>");
            echo ("<a href=\"Vehiculos_copy.php?ID_Usuario=$usu\"><button>Volver</button></a>");
        }
        else{
            echo("Ha ocurrido un error, vuelve a intentarlo");
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="app.css">

</head>
<body>
<?php require "partials/header.php"?>

    
</body>
</html>