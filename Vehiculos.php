<?php
 /*
    $db_host = "localhost";
    $db_name = "";
    $db_user = "";
    $db_pass = "";
 
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }
 
    $sql = "SELECT *
            FROM user
            ORDER BY date_entry;";
 
    $results = mysqli_query($conn, $sql);
 
    if ($results === false) {
        echo mysqli_error($conn);
    } 
    
    else {
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }
 */
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="app.css">

    <title>Lista de Vehículos</title>
</head>
<body>

    <div class="pagina">    
        
        <h1 class="titulo">Lista de Vehículos</h1>
    
        <h3>Datos Usuario</h3>
    
        <input class="boton" type="button" value="Editar Usuario">
    
        <br>
    
        <h3>Listado de Vehículos</h3>
    
        <input class="boton" type="button" value="Añadir vehículo">
    
    </div>

</body>
</html>