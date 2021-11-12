<?php 

    /*Esta función nos realizará la consulta del ID de usuario en la tabla de Usuarios
    y si la consulta devuelve algo, nos retornará una variable (array) que podremos usar para obtener 
    los datos de la base de datos que necesitemos [Ejemplo de uso en Vehiculos_copy] */
    function getID_Usu($connLocal, $usuLocal){

        $consulta = "SELECT * FROM usuarios where ID_Usuario = $usuLocal";
        $results = mysqli_query($connLocal, $consulta);

        if ($results){

            return $results->fetch_array();
        }

        return null;
    }


?>