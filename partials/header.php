

<header class="headerr">
    <a href="#">Proyecto Vehículos</a>
    <nav class="navegador">
        <div class="user_logout">

            <i class="fas fa-user"></i>
            <p><span><?php echo $_SESSION['username']?></span></p>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
        
        <div class="header_flex">
            <p><?php echo $_COOKIE['galletas']?></p>

        </div>
        
    </nav>
</header>

