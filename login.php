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

            if ($password == $contraseñaBBDD){

                echo ("Bienvenido ".$nombre. ":D");
                echo ("<a href=\"Vehiculos_copy.php?ID_Usuario=$usu\"><button>Continuar</button></a>");
            }
            else{
                require "index.php";
             
                echo ("<script type=\"text/javascript\">alert(\"Usuario o Contraseña Incorrectos\");</script>");

                
            }
        }
    }




?>