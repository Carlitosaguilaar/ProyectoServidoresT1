
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/CSS/all.min.css">
    <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
    <title>Registro de Usuarios</title>

</head>
<body>

    <header class="headerr">
        <a href="#">Proyecto Vehículos</a>
        <nav class="navegador">
            
            <a href="logout.php">Logout</a>
        </nav>
    </header>
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
</body>
</html>