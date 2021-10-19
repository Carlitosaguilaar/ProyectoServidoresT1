<?php 

   
$matricula = $_POST["matricula"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];


    
    $inc = require "conexion/conexion_database.php";
    if($inc){

        $consulta = "INSERT INTO usuarios VALUES ('$matricula','$marca','$modelo')";

        $results = mysqli_query($conn, $consulta);

        echo ("vehiculo guardado <br>");
        echo ("<a href=\"ProyectoServidoresT1/index.php\"><button>Volver</button></a>");
       
    }

?>