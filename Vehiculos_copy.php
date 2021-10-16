<?php 

$usu = $_GET["ID_Usuario"];
if (!$usu){
    echo "esto no va";
}

$inc = require "conexion_database.php";

if ($inc){

    $consulta = "SELECT * FROM usuarios where ID_Usuario = $usu";
    $results = mysqli_query($conn, $consulta);

    if ($results){

        while ($row = $results->fetch_array()){

            $nombre = $row['Nombre'];
            $email = $row['Email'];
            $telefono = $row['Telefono'];
        }
    }
}
?>

<?php 

if ($inc){
    
    $consulta2 = "SELECT * FROM vehiculos where ID_Usuario = $usu";
    $results2 = mysqli_query($conn, $consulta2);
    
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/CSS/app.css">
        
        <title>Lista de Vehículos</title>
    </head>
    <body>
        
        <?php require "partials/header.php" ?>
        
        <div class="contenedor_form">
            <div class="formulario">    
                
                <h1>Lista de Vehículos</h1>

                <form>
                    <div class="campo">
                        <label for="nombre">Nombre: <?php echo $nombre?></label>
                        <input type="tel" id="nombre" name="nombre" placeholder="Nuevo nombre">

                    </div>

                    <div class="campo">
                        <label for="email">Email: <?php echo $email?></label>
                        <input type="tel" id="email" name="email"  placeholder="Nuevo Email">
                    </div>

                    <div class="campo">
                        <label for="telefono">Telefono: <?php echo $telefono?></label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Nuevo teléfono">

                    </div>

                    <input type="submit" class="boton" name="submit" value="Editar usuario">
                </form>

                
                <br>
                
                <h3>Listado de Vehículos</h3>
                
                <div class="titulo_usu">

                    <div class="contenedor_tablas">

                        <table border="1px">

                            <tr>
                                <th> Matricula </th>
                                <th> Marca </th>
                                <th> Modelo </th>
                            </tr>

                            <?php 
                            
                            if ($results2){
                                
                                while ($row = $results2->fetch_array()){
                
                                    $matricula = $row['Matricula'];
                                    $marca = $row['Marca'];
                                    $modelo = $row['Modelo'];
                                
                                
                            
                            ?>

                            <tr>
                                <td><?php echo $matricula ?></td>
                                <td><?php echo $marca ?></td>
                                <td><?php echo $modelo ?></td>
                            </tr> 

                            <?php 
                        
                                } // Llave que cierra el bucle while
                            } //Llave que cierra el if
                            ?>

                        </table>

                    </div> 

                </div>
                
                <input class="boton" type="button" value="Añadir vehículo">
                
            </div>
        </div> <!-- cierre de contenedor_form -->
        
    </body>
</html>