<?php 

    
    $nombre_cookie = 'galletas';
    $fecha = new DateTime();
    $valor = $fecha -> format('d-m-Y H:i:s');
    setcookie($nombre_cookie,$valor);
    

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

        session_start();
        $_SESSION['admin']=$admin;  
        $_SESSION['username']=$nombre;
        $_SESSION['id']=$usu;
        header("Location:lista_usuarios.php");
        
    }
    else if($admin == 0 && password_verify($password, $contraseñaBBDD)){
        session_start();
        $_SESSION['admin']=$admin;  
        $_SESSION['username']=$nombre;
        $_SESSION['id']=$usu;
        header("Location:Vehiculos_copy.php?ID_Usuario=$usu");

    }
    else{
        require "index.php";
        
        echo ("<script type=\"text/javascript\">alert(\" Usuario o Contraseña Incorrectos\");</script>");

    }

        
    
?>


