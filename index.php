<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/CSS/app.css">
    <link rel="stylesheet" href="estilos/CSS/header.css">

</head>
<body>
    <?php require 'partials/header.php '?>
    <div class="contenedor_form">
        <form action="" class="formulario">
            <h2 class="login_titulo">Login</h2>
            <div class="campo">
                <input type="text" name="nombre" class="inputs" placeholder="Nombre">
            </div>
            <div class="campo">
                <input type="password" name="password" class="inputs" placeholder="Contraseña">
            </div>
            <input type="submit" value="Login" class="boton">
            <p class="info">¿Nuevo Usuario? <a href="form_usuarios.html">Regístrate aquí</a></p>
        </form>

    </div>


</body>
</html>