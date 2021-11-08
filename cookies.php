<?php

$nombre_archivo = 'Login.php';
    if (file_exists($nombre_archivo)) {
        echo "El último acceso a $nombre_archivo fue: " . date("F d Y H:i:s.", fileatime($nombre_archivo));
    }
    
    setcookie("inicio_sesion","$nombre_archivo", time()+ (60*10));

    ?>