<?php

    $db_host = "localhost";
    $db_name = "proyectophp";
    $db_user = "root";
    $db_pass = "";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    echo "Conexión correcta";
 
    $consulta = "SELECT telefono FROM usuarios";
 
    $results = mysqli_query($conn, $consulta);
 
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
 
        print_r($users);
    }
 
?>