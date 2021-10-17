<?php  
    $conn = require "conexion/conexion_database.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/app.css">
    

</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">

        <form action="login.php" class="formulario" method="POST">
                <h2 class="login_titulo">Login</h2>
                <div class="campo">
                    <input type="text" name="nombre" class="inputs" placeholder="Nombre">
                </div>
                <div class="campo">
                    <input type="password" name="password" class="inputs" placeholder="Contraseña">
                </div>
                <a href="registro_usu.php">Nuevo aquí? Regístrate</a>
                <input type="submit" value="Registro" class="boton">
                
            </form>
    </div>


</body>
</html>