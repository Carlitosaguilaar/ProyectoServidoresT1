<?php 
session_start();

if (isset($_SESSION['user_id'])){
    header('Location: /php-login');
}
    require 'database.php';
    if (!empty ($_POST['email'])&&(!empty($_POST['password']))){
        $records = $conn ->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records -> bindParam(':email',$_POST['email']);
        $records->execute();
        $result = $records ->fetch((PDO::FETCH_ASSOC));
        $mensaje = '';
        if (count($result)>0 && password_verify($_POST['password'],$result['password'])){
            $_SESSION['user_id']= $result['id'];
            header('Location: /php-login');
        }
        else{
            $mensaje = 'Lo sentimos, no coincide el login';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asserts/css/styles.css">
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if (!empty($mensaje)):  ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
    <h1>Login</h1>
    <span>or <a href="registrarse.php">Sign Up</a></span>
    <form action="login.php" class="formulario" method="POST">
        <input type="text" name="email" placeholder="Introduce tu email" class="inputs">
        <input type="password" name="password" placeholder="Introduce tu contraseña" class="inputs">
        <input type="submit" value="Entrar" class="boton">
    </form>
</body>
</html>