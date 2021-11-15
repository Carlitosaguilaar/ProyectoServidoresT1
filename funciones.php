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

    // Lo mismo que la función anterior pero en este caso para asignar los vehículos con el ID de usuario correspondiente.
    function getID_Vehiculo($connLocal, $usuLocal){
        $consulta = "SELECT * FROM vehiculos where ID_Usuario = '$usuLocal'";
        $results = mysqli_query($connLocal, $consulta);
    
        if ($results){
    
            return $results->fetch_array();
        }
    
        return null;
    }


    // Funcion para obtener el id de vehículo y filtra resultados con el (Usado en detalles_servicios)
    function Vehiculo_servicio($connLocal, $vehiculoLocal){
        $consulta = "SELECT * FROM vehiculos where ID_Vehiculo = '$vehiculoLocal'";
        $results = mysqli_query($connLocal, $consulta);

        if ($results){

            return $results->fetch_array();
        }

        return null;
    }


    //
    function detalle_servicio($connLocal,$vehiculoLocal,$id_servicioLocal){

        $consulta = "SELECT * FROM servicios where ID_vehiculo = $vehiculoLocal AND ID_Servicio = $id_servicioLocal";
        $results = mysqli_query($connLocal, $consulta);

        if ($results){

            return $results->fetch_array();
        }
    }
?>