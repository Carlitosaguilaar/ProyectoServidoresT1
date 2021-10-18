<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Registro de Usuarios</title>

</head>
<body>

    <?php require "partials/header.php"?>
    <div class="contenedor_form">

        <form method="POST" action="insertar_vehi.php" class="formulario">
        <div class="campo">
            <label for="matricula">Matricula: <?php echo $matricula?></label>
            <input type="text" id="matricula" name="matricula" placeholder="Nueva matricula" class="inputs" required>
        </div>

        <div class="campo">
            <label for="marca">Marca: <?php echo $marca?></label>
            <input type="tel" id="marca" name="marca"  placeholder="Nueva marca" class="inputs" required>
        </div>

        <div class="campo">
            <label for="modelo">Modelo: <?php echo $modelo?></label>
            <input type="tel" id="modelo" name="modelo"  placeholder="Nueva modelo" class="inputs" required>
        </div>
            
            <input type="submit" class="boton" name="submit" value="Guardar Vehículo" class="inputs">
        </form>
    </div>
</body>
</html>