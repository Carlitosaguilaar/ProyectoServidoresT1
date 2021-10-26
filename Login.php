<?php 

    $nombre = $_POST["nombre"];
    $contraseñaBBDD= "";
    $password = $_POST["password"];
    $inc = require "conexion_database.php";
 
    if ($inc){
            $consulta = "SELECT * FROM usuarios WHERE Nombre = '$nombre'";
            $results = mysqli_query($conn, $consulta);
    
        if ($results){
            while ($row = $results->fetch_array()){
    
                $usu = $row['ID_Usuario'];
                $contraseñaBBDD = $row['Contraseña'];
            }
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
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php 
         if ($password == $contraseñaBBDD){
            header("Location:Vehiculos_copy.php?ID_Usuario=$usu");
        }
        else{
            require "index.php";
            echo ("<script type=\"text/javascript\">alert(\"Usuario o Contraseña Incorrectos\");</script>"); 
            
        }
    ?>
</body>
</html>