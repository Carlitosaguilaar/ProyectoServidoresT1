<?php 
    //Traerme las funciones
    require "funciones.php";
    //CONTROLAR SESIONES
    $usu = $_GET["id_usu"];
    session_start();
    if (!isset($usu)){
        header("Location:index.php");
    }
    
    if($_SESSION['id'] != $usu && $_SESSION['admin'] == 0){
        header("Location:index.php");
    }
?>
<?php 
    
    $nombre_usu = $_GET["nombre_usu"];
    $vehiculo = $_GET["id_vehiculo"];
    $id_servicio = $_GET["id_servicio"];
    $nombre_servicio = $_GET["nombre_servicio"];

    $inc = require "conexion_database.php";

if ($inc){
    //consulta 1
    $results = Vehiculo_servicio($conn, $vehiculo); //results devuelve un array

    if ($results){       
         
        $id_vehii = $results['ID_Vehiculo'];
        $matricula = $results['Matricula'];
        $id_usu_fk= $results['Id_usuario'];
        $marca = $results['Marca'];
        $modelo = $results['Modelo'];
        $año_fabri = $results['Año_fabricacion'];
    }

}

if ($inc){
    //consulta 2
    $results2 = detalle_servicio($conn,$vehiculo,$id_servicio); //results devuelve un array

    if ($results2){        

        $id_servicio = $results2['ID_Servicio'];
        $id_vehiculo_fk = $results2['ID_vehiculo'];
        $nombre_servicio= $results2['Nombre'];
        $precio_servicio = $results2['Precio'];
        $tipo_servicio = $results2['tipo_servicio'];
        $descripcion = $results2['descripcion'];
        $fecha = $results2['fecha'];   
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
    <link rel="stylesheet" href="estilos/CSS/all.min.css">
    <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php require "partials/header.php" ?>
    <div class="contenedor_form">
        
            <div class="formulario formulario_3">    
                <h1>Usuario: <span><?php echo $nombre_usu ?></span></h1>
                <h1>Información de Vehículo</h1>

                <table border="1">

                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año de fabricación</th>
                    </tr>
                    
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
               
                <br>
                <h1> <span><?php  echo $nombre_servicio ?></span></h1>
                <h3>Detalles del servicio</h3>

                <div class="contenedor_formulario_servicios">
                    <form action="editar_detalles_servicios.php" method="GET" class="formulario_3">

                        <div class="campo">
                            <label for="tipo_servicio">Tipo de servicio: </label>
                            <input type="text" id="tipo_servicio" name="tipo_servicio" class="inputs" value="<?php echo $tipo_servicio ?>">
                        </div>
                        <div class="campo">
                            <label for="descripcion">Descripción: </label>
                            <textarea name="descripcion" class="inputs" id="descripcion" cols="30" rows="10"><?php echo $descripcion ?></textarea>
                        </div>
                        <div class="campo">
                            <label for="fecha">Fecha: </label>
                            <input type="date" id="fecha" name="fecha" class="inputs" value="<?php echo $fecha ?>">
                        </div>
                        <div class="campo">
                            <label for="precio_servicio">Precio del servicio:  </label>
                            <input type="number" step="0.01" id="precio_servicio" name="precio_servicio" class="inputs" value="<?php echo $precio_servicio ?>">
                        </div>
                        <input type="submit" class="boton" name="submit" id="submit" value="Editar servicios">
                        
                        <input type="hidden" name="id_vehiculo" value="<?php echo $id_vehiculo_fk ?>">
                        <input type="hidden" name="id_servicio" value="<?php echo $id_servicio ?>">
                        <input type="hidden" name="nombre_usu" value="<?php echo $nombre_usu ?>"> <!-- Línea nueva agregada -->
                        <input type="hidden" name="nombre_servicio" value="<?php echo $nombre_servicio ?>">
                        <input type="hidden" name="id_usu" value="<?php echo $usu ?>">
                        <hr>                  
                    </form>
                </div>
            </div> <!-- Cierre del formulario -->
        </div> <!-- cierre de contenedor_form -->
</body>
</html>