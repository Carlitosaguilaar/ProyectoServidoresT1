<?php 
    //Traerme las funciones
    require 'funciones.php';
    //CONTROLAR SESIONES
    session_start();
    if (!$_SESSION['username']){
       header("Location:index.php");
    }
    $user= $_SESSION['username']
?>
<?php 

    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $contraseña = password_hash($_GET["pass"], PASSWORD_DEFAULT);
   
    $inc = require "conexion_database.php";
    if($inc){
         
        $consulta = "SELECT * FROM usuarios WHERE Nombre = '$user'";
        $results = mysqli_query($conn, $consulta);
    
        if ($results){
    
            while ($row = $results->fetch_array()){
    
                $usu = $row['ID_Usuario'];
                $contraseñaBBDD = $row['Contraseña'];
                $admin = $row['Admin'];
            }
        }

        if ($results){
            $results2 = insert_usuarios($conn, $nombre, $contraseña, $email, $telefono);

            if ($admin == 1){    
                header("Location:lista_usuarios.php");
            }
            else{
                header("Location:index.php");
            }
        }
    }
?>