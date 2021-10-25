<?php 
    session_start();
    $nombre_usuario = $_SESSION['username'];

?>

<header class="headerr">
    <a href="#">Proyecto Vehículos</a>
    <nav class="navegador">
        
        
        <p><span><?php echo $nombre_usuario?></span></p>
        <a href="logout.php">Logout</a>
    </nav>
</header>

