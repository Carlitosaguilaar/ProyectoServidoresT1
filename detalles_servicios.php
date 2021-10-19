<?php 

    $vehiculo = $_GET["id_vehi"];
    $id_servicio = $_GET["id_servi"];
    $descripcion = $_GET["descripcion"];
    $fecha = $_GET["fecha"];

    require "conexion_database.php";
    

    $consulta = "INSERT INTO servicios (ID_Servicio, Tipo de servicio, Descripción, Fecha)
    VALUES ('$id_servicios','$nombre_servicio', '$descripcion', '$fecha')";

?>



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle servicios</title>
    <link rel="stylesheet" href="app.css">

</head>
<body>
<?php require "partials/header.php"?>

<form action="lista_servicios.php" method="POST" class="formulario2" >

    <div class="contenedor_form">

    <input type="submit" id="nombre" name="nombre" class="inputs" value="Nombre: <?php echo $nombre ?>">
    
    <input type="submit" id="precio" name="precio" class="inputs" value="Precio: <?php echo $precio ?>">

    <input type="submit" id="descripcion" name="descripcion" class="inputs" value="Descripción: <?php echo $descripcion ?>">

            <input type="submit" class="boton" name="submit" value="Volver" class="inputs">


    </div>
</form>
</body>
</html>



                        