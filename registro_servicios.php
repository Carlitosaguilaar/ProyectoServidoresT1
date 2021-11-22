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

    $vehiculo = $_GET["id_vehi"];
    $id_servicio = $_GET["id_servi"];
    //$id_usuario = $_GET["id_usu"]; comentada porque se está usando en línea 5
    $matricula = $_GET["matricula"];
    require "conexion_database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de servicios</title>
    <link rel="stylesheet" href="estilos/CSS/all.min.css">
    <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>
<body>
<?php require "partials/header.php"?>
    <div class="contenedor_form">

        <form method="GET" action="insertar_servicio.php" class="formulario">
            <div class="campo">
                <label for="nombre_servicio">Nombre: </label>
                <input type="text" id="nombre_servicio" name="nombre_servicio" placeholder="Nombre del servicio" class="inputs" required>
    
            </div>
    
            <div class="campo">
                <label for="precio_servicio">Fecha: </label>
                <input type="date" id="fecha" name="fecha"  class="inputs" required>
            </div>
    
            <div class="campo">
               
                <input type="hidden" id="id_vehiculo" name="id_vehiculo" value="<?php echo $vehiculo ?>" required>
                <input type="hidden" id="id_servicio" name="id_servicio" value="<?php echo $id_servicio ?>">
                <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu?>">
                <input type="hidden" id="matricula" name="matricula" value="<?php $matricula ?>">
    
            </div>
            
            <input type="submit" class="boton" name="submit" value="Registrar servicio" class="inputs">
        </form>
    </div>
</body>
</html>