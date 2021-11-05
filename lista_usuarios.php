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
    <link rel="stylesheet" href="estilos/CSS/all.min.css">
    <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">

        <div class="formulario4">
            <div class="listado_boton">

                <h3>Listado de Usuarios</h3>
                
                
                <form action="registro_usu.php" method="GET">
                    <input type="submit" value="Añadir Usuario" class="boton">
                    
                </form>
            </div> <!-- div listado_boton -->
                        
                <?php 
    
                if ($results){
    
                    while ($row = $results->fetch_array()){
                        $id_usu = $row['ID_Usuario'];
                        $contra = $row['Contraseña'];
                        $nombre = $row['Nombre'];
                        $telefono = $row['Telefono'];
                        $email = $row['Email'];
    
                ?>
    
    
                <form action="Vehiculos_copy.php" method="GET" class="formulario5" >
    
                    <div class="campo">
                        <label for="ID_Usuario">ID Usuario: </label>
                        <input type="submit" id="id_usuario" name="ID_Usuario" class="inputs" value="<?php echo $id_usu ?>">
    
                        <label for="nombre" class="label2"><i class="far fa-user"></i></label>
                        <input type="submit" id="nombre" name="nombre" class="inputs" value="<?php echo $nombre ?>">
    
                        <label for="telefono" class="label2"><i class="fas fa-phone-square"></i></label>
                        <input type="text" id="telefono" name="telefono" class="inputs" value="<?php echo $telefono ?>" readonly>
                        <label for="email" class="label2"><i class="fas fa-envelope"></i></label>
                        <input type="text" id="email" name="email" class="inputs" value="<?php echo $email ?>" readonly>
                        
    
    
                        
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