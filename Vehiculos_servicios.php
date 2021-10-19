<?php 

$usu = $_GET["ID_Usuario"];
$vehi = $_GET["ID_Vehiculo"];

if (!$vehi){
    header("Location:registro_vehi.php");
}

$inc = require "conexion/conexion_database.php";

if ($inc){

    $consulta = "SELECT * FROM usuarios where ID_Usuario = $usu";
    $results = mysqli_query($conn, $consulta);

    if ($results){

        while ($row = $results->fetch_array()){

            $nombre = $row['Nombre'];
        }
    }
}
?>

<?php 

if ($inc){
    
    $consulta2 = "SELECT * FROM vehiculos where ID_Vehiculo = $vehi";
    $results2 = mysqli_query($conn, $consulta2);
    
    if ($results2){
                                
        while ($row = $results2->fetch_array()){

            $matricula = $row['Matricula'];
            $marca = $row['Marca'];
            $modelo = $row['Modelo'];
        }
    }
}
?>

<?php 

if ($inc){
    
    $consulta2 = "SELECT * FROM servicios where ID_vehiculo = $vehi";
    $results2 = mysqli_query($conn, $consulta2);
    
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app.css">
        
        <title>Lista de Vehículos</title>
    </head>
    <body>
        
        <?php require "partials/header.php" ?>
        
        <div class="contenedor_form">
            <div class="formulario">    
                
                <h1><?php echo $nombre?></h1>
                <h2>Vehículo</h2>

                <form method="POST" action="editar_vehiculo.php">
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

                    <div class="campo">

                        <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu ?>" class="inputs" required>
                        <input type="hidden" id="id_Vehi" name="id_Vehi" value="<?php echo $vehi ?>" class="inputs" required>

                    </div>
                    

                    <input type="submit" class="boton" name="submit" value="Guardar" class="inputs">
                </form>

                
                <br>
                
                <h3>Listado de servicios</h3>
                
                <div class="titulo_usu">

                    <div class="contenedor_tablas">

                        

                            <?php 
                            
                            if ($results2){
                                
                                while ($row = $results2->fetch_array()){
                
                                    $tipo_servicio = $row['Nombre'];
                                    $fecha = $row['Fecha'];
                                
                            ?>


                            <form action="" method="POST" class="formulario2">

                                            
                                <input type="submit" id="tipo_servicio" name="tipo_servicio" class="inputs" value="Servicio: <?php echo $tipo_servicio ?>">

                                <input type="submit" id="fecha" name="fecha" class="inputs" value="Fecha: <?php echo $fecha ?>">

                                <br>

                                
                                
                            <?php 

                                } // Llave que cierra el bucle while
                            } //Llave que cierra el if

                            ?>

                            </form>
                        </table>

                    </div> 

                </div>
                <form action="registro_vehiculo.php" method="GET">
                    <input type="submit" value="Añadir vehículo" class="boton">
                    <input type="hidden" name="ID_Usuario" value="<?php echo $usu ?>">
                    <input type="hidden" name="Maricula" value="<?php echo $matricula ?>">
                </form>
               
                
            </div> <!-- Cierre del formulario -->
        </div> <!-- cierre de contenedor_form -->
        
    </body>
</html>