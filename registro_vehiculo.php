<?php 
    //Traerme las funciones
    require "funciones.php";
    //CONTROLAR SESIONES
    $usu = $_GET["ID_Usuario"];
    session_start();
    if (!isset($usu)){
        header("Location:index.php");
    }
    
    if($_SESSION['id'] != $usu && $_SESSION['admin'] == 0){
        header("Location:index.php");
    }
?>
<?php 

    //$usu = $_GET["ID_Usuario"]; comentada porque se usa en la línea 5
    require "conexion_database.php";
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/CSS/all.min.css">
    <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>
<body>
<?php require "partials/header.php"?>
    <div class="contenedor_form">

        <form method="GET" action="insertar_vehiculo.php" class="formulario">
            <div class="campo">
                <label for="matricula">Matrícula: </label>
                <input type="text" id="matricula" name="matricula" placeholder="Matrícula del Vehículo" class="inputs" required>
    
            </div>
    
            <div class="campo">
                <label for="marca">Marca: </label>
                <input type="text" id="marca" name="marca"  placeholder="Marca" class="inputs" required>
            </div>
    
            <div class="campo">
                <label for="Modelo">Modelo: </label>
                <input type="text" id="modelo" name="modelo" placeholder="Modelo" class="inputs" required>
    
            </div>
            <div class="campo">
                <label for="año_fabri">Año de fabricación: </label>
                <input type="number" id="año_fabri" name="año_fabri" placeholder="Año de fabricación (AAAA)" class="inputs" required>
    
            </div>
            <div class="campo">
               
                <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu ?>" required>
    
            </div>
            
            <!-- <div class="campo">
                <label for="id_usu">ID de usuario: </label>
                <input type="text" id="id_usu" name="id_usu" placeholder="ID usuario" class="inputs" required>
    
            </div> -->
    
            
    
            <input type="submit" class="boton" name="submit" value="Añadir Vehículo" class="inputs">
        </form>
    </div>
</body>
</html>