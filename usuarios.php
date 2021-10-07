<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista_Usuarios</title>
    <link rel="stylesheet" href="estilos/css/app.css">

</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">

        <form action="" class="formulario">
                <h2 class="login_titulo">Login</h2>
                <div class="campo">
                    <input type="text" name="nombre" class="inputs" placeholder="Nombre">
                </div>
                <div class="campo">
                    <input type="password" name="password" class="inputs" placeholder="Contraseña">
                </div>
                <div class="campo">
                    <input type="tel" name="telefono" class="inputs" placeholder="Teléfono">
                </div>
                <div class="campo">
                    <input type="email" name="email" class="inputs" placeholder="Email">
                </div>
                <input type="submit" value="Registro" class="boton">
                
            </form>
    </div>
</body>
</html>