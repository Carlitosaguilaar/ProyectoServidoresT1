<?php 
    $inc = require "conexion_database.php";
    if ($inc){
        $consulta = "SELECT * FROM usuarios;";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

