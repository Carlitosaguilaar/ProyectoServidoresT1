<?php 
    session_start();
    require 'database.php';
    if(isset($_SESSION['user_id'])){
        $records = $conn ->prepare('SELECT id,email,password FROM users WHERE id= :id');
        $records-> bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $result = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($result) > 0){
            $user = $result;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi app</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asserts/css/styles.css">
    
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if (!empty($user)): ?>
        <br>Bienvenido. <?= $user['email']?>
        <br>Estás correctamente logueado
        <a href="logout.php">Logout</a>
    <?php else: ?>

        <h1>Login or SignUp</h1>
        <a href="login.php">Login</a>
        <a href="registrarse.php">Registrarse</a>
    <?php endif; ?>
</body>
</html>