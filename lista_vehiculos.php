<?php 
    require "conexion_database.php";
    
    $consulta = "SELECT * FROM vehiculos INNER JOIN usuarios ON usuarios.ID_Usuario = vehiculos.ID_Vehiculo;";
    $resultado = mysqli_query($conn,$consulta);
    $consulta2 = "SELECT Nombre, ID_Usuario  FROM usuarios;";
    $resultado2 = mysqli_query($conn,$consulta2);
    while($roww=mysqli_fetch_array($resultado2)){
        $nombre_usu = $roww['Nombre'];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
    <link rel="stylesheet" href="estilos/CSS/app.css">
</head>
<body>
    <?php require "partials/header.php" ?>
    <h2><?php echo  $nombre_usu ?></h2>
    <table border="1">
        <tr>
            <th>Id_Vehículo</th>
            <th>Matrícula</th>
            <th>Id_Usuario</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año de fabricación</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($resultado)){

        ?>
        <tr>
            <td><?php echo $row['ID_Vehiculo']?></td>
            <td><?php echo $row['Matricula'] ?></td>
            <td><?php echo $row['Id_usuario'] ?></td>
            <td><?php echo $row['Marca'] ?></td>
            <td><?php echo $row['Modelo'] ?></td>
            <td><?php echo $row['Año_fabricacion'] ?></td>
        </tr>
        <?php  } ?>
       
    </table>
</body>
</html>