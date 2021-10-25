<?php 

session_start();
print_r($_SESSION);
?>

<header class="headerr">
    <a href="#">Proyecto Vehículos</a>
    <nav class="navegador">
        <a href="index.php">Login</a>
        <a href=""><?php echo $_SESSION["nom_usu"]?></a>
    </nav>
</header>

