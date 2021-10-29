<?php 
    //CONTROLAR SESIONES
    session_start();
    if (!$_SESSION['username']){
       header("Location:index.php");
    }
    
?>

<?php 
    

    $inc = require "conexion_database.php";
    if ($inc){
        $consulta = "SELECT * FROM usuarios;";
        $results = mysqli_query($conn, $consulta);
    }


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuario</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">

        <div class="formulario4">
    
            <h3>Listado de Usuarios</h3>
                        
                <?php 
    
                if ($results){
    
                    while ($row = $results->fetch_array()){
                        $id_usu = $row['ID_Usuario'];
                        $contra = $row['Contraseña'];
                        $nombre = $row['Nombre'];
                        $telefono = $row['Telefono'];
                        $email = $row['Email'];
    
                ?>
    
    
                <form action="Vehiculos_copy.php" method="GET" class="formulario2" >
    
                    <div class="campo">
                        <label for="ID_Usuario">ID Usuario: </label>
                        <input type="submit" id="id_usuario" name="ID_Usuario" class="inputs" value="<?php echo $id_usu ?>">
    
                        
                        <input type="submit" id="nombre" name="nombre" class="inputs" value="Nombre: <?php echo $nombre ?>">
    
                        <input type="text" id="pass" name="pass" class="inputs" value="Contraseña: <?php echo $contra ?>" readonly>
                        <input type="text" id="telefono" name="telefono" class="inputs" value="Teléfono: <?php echo $telefono ?>" readonly>
                        <input type="text" id="email" name="email" class="inputs" value="Email: <?php echo $email ?>" readonly>
                        
    
    
                        
                    </div>
                    <hr>
                </form>
    
    
    
                <?php 
    
                    } // Llave que cierra el bucle while
                } //Llave que cierra el if
    
                ?>
        </div>
    </div>


</body>
</html>