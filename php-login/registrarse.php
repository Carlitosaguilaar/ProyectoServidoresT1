<?php 
    require 'database.php';
    $mensaje = '';
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (email, password) VALUES (:email,:password)";
        $statement = $conn-> prepare($sql);
        $statement-> bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $statement-> bindParam(':password',$password);

        if ($statement->execute()){
            $mensaje= 'Usuario creado satisfactoriamente';
        }
        else{
            $mensaje='Sorry ha ocurrido un error con el registro';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asserts/css/styles.css">
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if (!empty($mensaje)): ?>
        <p><?= $mensaje ?></p>
     <?php endif ?>   
    <h1>Sign Up :D</h1>
    <span>or <a href="login.php">Login</a></span>
    <form action="registrarse.php" class="formulario" method="POST">
        <input type="text" name="email" placeholder="Introduce tu email" class="inputs">
        <input type="password" name="password" placeholder="Introduce tu contraseña" class="inputs">
        <input type="password" name="confi_password" placeholder="Confirma tu contraseña" class="inputs">
        <input type="submit" value="Entrar" class="boton">
    </form>
</body>
</html>