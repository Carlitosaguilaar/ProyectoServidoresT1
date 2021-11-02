<?php 
    //CONTROLAR SESIONES
    session_start();
    if (!$_SESSION['username']){
       header("Location:index.php");
    }
    
?>
<?php 

   
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $contraseña = password_hash($_GET["pass"], PASSWORD_DEFAULT) ;


    
    $inc = require "conexion_database.php";
    if($inc){

        $consulta = "INSERT INTO usuarios (Nombre, Contraseña, Email, Telefono)
        VALUES ('$nombre','$contraseña','$email', '$telefono')";
        $results = mysqli_query($conn, $consulta);

        if ($results){
            header("Location:index.php");
        }

       
    }


?>