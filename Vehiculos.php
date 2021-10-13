<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="estilos/CSS/app.css">

    <title>Lista de Vehículos</title>
</head>
<body>

    <?php require "partials/header.php" ?>
    
    <div class="contenedor_form">
        <div class="formulario">    
        
            <h1>Lista de Vehículos</h1>
        
            <h3>Datos Usuario</h3>

            <?php 

                $usu = $_GET["ID_Usuario"];

                $inc = require "conexion/conexion_database.php";

                if ($inc){

                    $consulta = "SELECT * FROM usuarios where ID_Usuario = $usu";
                    $consulta2 = "";
                    $results = mysqli_query($conn, $consulta);

                    if ($results){

                        echo" <div class=\"titulo_usu\">";
                        echo" <div class=\"contenedor_tablas\">";
                        echo " <table border=\"1px\">";
                        echo "<tr><th>Nombre</th><th>Email</th><th>Teléfono</th></tr>";

                        while ($row = $results->fetch_array()){

                            $nombre = $row['Nombre'];
                            $email = $row['Email'];
                            $telefono = $row['Telefono'];

                            ?> 
                                
                            <tr>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $telefono ?></td>
                
                            </tr>    
                                    
                            <?php
                        }
                        echo"</table>";
                        echo"</div>";   
                        echo"</div>";

                    }
                }
            ?>
        
            <input class="boton" type="button" value="Editar Usuario">
        
            <br>
        
            <h3>Listado de Vehículos</h3>

            <?php 

                $inc = require "conexion/conexion_database.php";

                if ($inc){

                    $consulta = "SELECT * FROM vehiculos where ID_Usuario = $usu";
                    $consulta2 = "";
                    $results = mysqli_query($conn, $consulta);

                    if ($results){

                        echo" <div class=\"titulo_usu\">";
                        echo" <div class=\"contenedor_tablas\">";
                        echo " <table border=\"1px\">";
                        echo "<tr><th> Matricula </th><th> Marca </th><th> Modelo </th></tr>";

                        while ($row = $results->fetch_array()){

                            $matricula = $row['Matricula'];
                            $marca = $row['Marca'];
                            $modelo = $row['Modelo'];

                            ?> 
                                
                            <tr>
                                <td><?php echo $matricula ?></td>
                                <td><?php echo $marca ?></td>
                                <td><?php echo $modelo ?></td>

                            </tr>    
                                    
                            <?php
                        }
                        echo"</table>";
                        echo"</div>";   
                        echo"</div>";

                    }
                }
            ?>

            <input class="boton" type="button" value="Añadir vehículo">
            
        </div>
    </div>

</body>
</html>