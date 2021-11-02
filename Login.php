<?php 
    session_start();
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
                $admin = $row['Admin'];
            }
            
        }
    }

    if ($admin == 1 && password_verify($password, $contraseñaBBDD)){

        $_SESSION['username']=$nombre;
        header("Location:lista_usuarios.php");
        
    }
    else if($admin == 0 && password_verify($password,$contraseñaBBDD)){
        $_SESSION['username']=$nombre;
        header("Location:Vehiculos_copy.php?ID_Usuario=$usu");

    }
    else{
        require "index.php";
        
        echo ("<script type=\"text/javascript\">alert(\"Usuario o Contraseña Incorrectos\");</script>");

    }   
    
?>


