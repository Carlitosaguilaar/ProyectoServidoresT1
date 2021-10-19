<?php 
    
    $usu = $_POST["id_usuu"];
    $vehiculo = $_POST["id_vehii"];
    
    
    
    if (!$usu){
        header("Location:registro_usu.php");
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
                $id_usu = $row['ID_Usuario'];
            }
        }
    }
    


?>
<?php 
//CONSULTA 2

if ($inc){
    
    $consulta2 = "SELECT * FROM vehiculos where ID_Vehiculo = '$vehiculo'";
    $results2 = mysqli_query($conn, $consulta2);

    if ($results2){
    
        while ($row2 = $results2->fetch_array()){

            $id_vehii = $row2['ID_Vehiculo'];
            $matricula = $row2['Matricula'];
            $id_usu_fk= $row2['Id_usuario'];
            $marca = $row2['Marca'];
            $modelo = $row2['Modelo'];
            $año_fabri = $row2['Año_fabricacion'];
        }
    }
    
    
}
?>

<?php 

    //consulta 3

    if ($inc){
        $consulta3 = "SELECT * FROM servicios where ID_vehiculo = $vehiculo";
        $results3 = mysqli_query($conn, $consulta3);
        if ($results3){
            // while ($row3 = $results3->fetch_array()){
                
            //     print_r($row3);
            //     $id_servicio = $row3['ID_Servicio'];
            //     $id_vehiculo_fk = $row3['ID_vehiculo'];
            //     $nombre_servicio= $row3['Nombre'];
            //     $precio_servicio = $row3['Precio'];
                
            // }
        }
    }

?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de servicios</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">
        <h1>Usuario: <?php echo $nombre ?></h1>
            <div class="formulario">    
                
                <h1>Información de Vehículo</h1>

                <form method="POST" action="editar_vehiculo.php">
                    <div class="campo">
                        <label for="nombre">Matrícula: <?php echo $matricula?></label>
                        <input type="text" id="matricula" name="matricula" placeholder="Nueva matrícula" class="inputs" required>

                    </div>

                    <div class="campo">
                        <label for="marca">Marca: <?php echo $marca?></label>
                        <input type="text" id="marca" name="marca"  placeholder="Nueva marca" class="inputs" required>
                    </div>

                    <div class="campo">
                        <label for="modelo">Modelo: <?php echo $modelo?></label>
                        <input type="text" id="modelo" name="modelo" placeholder="Nuevo modelo" class="inputs" required>

                    </div>
                    <div class="campo">
                        <label for="año_fabri">Año de fabricación: <?php echo $año_fabri?></label>
                        <input type="number" id="año_fabri" name="año_fabri" placeholder="Nueva fecha de fabricación" class="inputs" required>

                    </div>
                    <div class="campo">

                        <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu ?>" class="inputs" required>
                        <input type="hidden" id="id_vehi" name="id_vehi" value="<?php echo $id_vehii ?>" class="inputs" required>


                    </div>
                    

                    <input type="submit" class="boton" name="submit" value="Editar vehículo" class="inputs">
                </form>

                
                <br>
                
                <h3>Listado de Servicios</h3>
                
                    <?php 

                    if ($results3){
                    
                        while ($row3 = $results3->fetch_array()){
                            
                            $id_servicio = $row3['ID_Servicio'];
                            $id_vehiculo_fk = $row3['ID_vehiculo'];
                            $nombre_servicio= $row3['Nombre'];
                            $precio_servicio = $row3['Precio'];
                            

                    ?>

                        <div class="contenedor_formulario_servicios">
                            <form action="detalles_servicios.php" method="POST" class="formulario_3">
    
                            <div class="campo">
    
                                <input type="submit" id="nombre_servicio" name="nombre_servicio" class="inputs" value="Nombre del servicio: <?php echo $nombre_servicio ?>">
    
                                <input type="submit" id="precio_servicio" name="precio_servicio" class="inputs" value="Precio del servicio: <?php echo $precio_servicio ?>">
    
                                
                                <input type="hidden" name="id_vehiculo" value="<?php echo $id_vehiculo_fk ?>">
                                <input type="hidden" name="id_servicio" value="<?php echo $id_servicio ?>">
                                <input type="hidden" name="nombre_usu" value="<?php echo $nombre ?>"> <!-- Línea nueva agregada -->
                                
                                
    
    
                                <hr>
                            </div>
                            </form>

                        </div>



                    <?php 

                        } // Llave que cierra el bucle while
                    } //Llave que cierra el if

                    ?>


                
                <form action="registro_servicios.php" method="GET">
                    <input type="submit" value="Añadir servicio" class="boton">
                    <input type="hidden" name="id_servi" value="<?php echo $id_servicio ?>">
                    <input type="hidden" name="id_vehi" value="<?php echo $id_vehii ?>">
                    <input type="hidden" name="id_usu" value="<?php echo $id_usu ?>">
                </form>
               
                
            </div> <!-- Cierre del formulario -->
        </div> <!-- cierre de contenedor_form -->


</body>
</html>