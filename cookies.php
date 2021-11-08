<?php

$nombre_archivo = 'Login.php';
    if (file_exists($nombre_archivo)) {
        echo "El último acceso fue el: " . date("d F Y H:i:s. ", fileatime($nombre_archivo));
    }

    setcookie("iniciosesion","$nombre_archivo", time()+ (60*10));

?>