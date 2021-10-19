<?php 
    
    $nombre_usu = $_POST["nombre_usu"];
    $vehiculo = $_POST["id_vehiculo"];
    $id_servicio = $_POST["id_servicio"];
    $nombre_servicio = $_POST["nombre_servicio"];
  
    
    
    $inc = require "conexion_database.php";
    //CONSULTA 1
  
    


?>
<?php 
//CONSULTA 2

if ($inc){
    
    $consulta2 = "SELECT * FROM vehiculos where ID_Vehiculo = '$vehiculo'";
    $results2 = mysqli_query($conn, $consulta2);

    
    
    
}
?>

<?php 

    //CONSULTA 3
    if ($inc){
        $consulta3 = "SELECT * FROM servicios where ID_vehiculo = $vehiculo AND ID_Servicio = $id_servicio";
        $results3 = mysqli_query($conn, $consulta3);
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
        <h1>Usuario: <?php echo $nombre_usu ?></h1>
            <div class="formulario">    
                
                <h1>Información de Vehículo</h1>

                <table border="1">

                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año de fabricación</th>
                    </tr>
                    <?php 
                        if ($results2){
    
                            while ($row2 = $results2->fetch_array()){
                    
                                $id_vehii = $row2['ID_Vehiculo'];
                                $matricula = $row2['Matricula'];
                                $id_usu_fk= $row2['Id_usuario'];
                                $marca = $row2['Marca'];
                                $modelo = $row2['Modelo'];
                                $año_fabri = $row2['Año_fabricacion'];
                            
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $matricula?>
                                    </td>
                                    <td>
                                        <?php echo $marca?>
                                    </td>
                                    <td>
                                        <?php echo $modelo?>
                                    </td>
                                    <td>
                                        <?php echo $año_fabri?>
                                    </td>
                                </tr>  
                        
                            </table>
                    
                    <?php   } //cierre del while ?>
                <?php   } // cierre del if?>

                
                <br>
                <h1><?php  echo $nombre_servicio ?></h1>
                <h3>Detalles del servicio</h3>
                
                    <?php 

                    if ($results3){
                    
                        while ($row3 = $results3->fetch_array()){
                            
                            $id_servicio = $row3['ID_Servicio'];
                            $id_vehiculo_fk = $row3['ID_vehiculo'];
                            $nombre_servicio= $row3['Nombre'];
                            $precio_servicio = $row3['Precio'];
                            $tipo_servicio = $row3['tipo_servicio'];
                            $descripcion = $row3['descripcion'];
                            $fecha = $row3['fecha'];

                            

                    ?>

                        <div class="contenedor_formulario_servicios">
                            <form action="editar_detalles_servicios.php" method="POST" class="formulario_3">
    
                                <div class="campo">
                                    <label for="tipo_servicio">Tipo de servicio: <?php echo $tipo_servicio ?></label>
                                    <input type="text" id="tipo_servicio" name="tipo_servicio" class="inputs">
                                </div>
                                <div class="campo">
                                    <label for="descripcion">Descripción: </label>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion ?></textarea>
                                </div>
                                <div class="campo">
                                    <label for="fecha">Fecha: <?php echo $fecha ?></label>
                                    <input type="date" id="fecha" name="fecha" class="inputs">
                                </div>
                                <div class="campo">
                                    <label for="precio_servicio">Precio del servicio:  <?php echo $precio_servicio ?></label>
                                    <input type="number" id="precio_servicio" name="precio_servicio" class="inputs">
                                </div>
                                <input type="submit" class="boton" name="submit" id="submit" value="Editar servicios">
                                
                                <input type="hidden" name="id_vehiculo" value="<?php echo $id_vehiculo_fk ?>">
                                <input type="hidden" name="id_servicio" value="<?php echo $id_servicio ?>">
                                <input type="hidden" name="nombre_usu" value="<?php echo $nombre ?>"> <!-- Línea nueva agregada -->
                                
                                
    
    
                                <hr>
                            
                            </form>

                        </div>



                    <?php 

                        } // Llave que cierra el bucle while
                    } //Llave que cierra el if

                ?>


                
        
               
                
            </div> <!-- Cierre del formulario -->
        </div> <!-- cierre de contenedor_form -->


</body>
</html>