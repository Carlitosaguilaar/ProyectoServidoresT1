<?php 
    $inc = require "conexion_database.php";
    if ($inc){
        $consulta = "SELECT * FROM usuarios;";
        $consulta2 = "";
        $results = mysqli_query($conn, $consulta);
        if ($results){
            while ($row = $results->fetch_array()){
                $nombre = $row['Nombre'];
                $email = $row['Email'];
                

                ?> 
                    <div class="titulo_usu">
                        <h3><?php echo $nombre  ?></h3>
                        <div class="info_usu">
                            <p>
                                <b>Email: </b><?php  echo $email ?>
                            </p>
                        </div>
                    </div>
                <?php
            }


        }
    }

?>