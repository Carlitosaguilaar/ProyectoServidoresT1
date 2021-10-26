<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/app.css">
    <title>Registro de Usuarios</title>

</head>
<body>

    <?php require "partials/header.php" ?>

    <div class="contenedor_form">

        <form method="GET" action="insertar_usu.php" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" placeholder="Nuevo nombre" class="inputs" required>
            </div>
    
            <div class="campo">
                <label for="email">Email: </label>
                <input type="tel" id="email" name="email"  placeholder="Nuevo Email" class="inputs" required>
            </div>
    
            <div class="campo">
                <label for="telefono">Telefono: </label>
                <input type="tel" id="telefono" name="telefono" placeholder="Nuevo teléfono" class="inputs" required>
            </div>
            <div class="campo">
                <label for="telefono">Contraseña: </label>
                <input type="password" id="pass" name="pass" placeholder="Contraseña" class="inputs" required>
            </div>
            
            <!-- <div class="campo">
                <label for="id_usu">ID de usuario: </label>
                <input type="text" id="id_usu" name="id_usu" placeholder="ID usuario" class="inputs" required>
    
            </div> -->
            <input type="submit" class="boton" name="submit" value="Crear usuario" class="inputs">
        </form>
    </div>
    <?php require "partials/footer.php" ?>
</body>
</html>