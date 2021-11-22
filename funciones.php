<?php 

    /*Esta función nos realizará la consulta del ID de usuario en la tabla de Usuarios
    y si la consulta devuelve algo, nos retornará una variable (array) que podremos usar para obtener 
    los datos de la base de datos que necesitemos [Ejemplo de uso en Vehiculos_copy] */
    function getConsulta_usuarios($connLocal, $usuLocal){

        $consulta = "SELECT * FROM usuarios where ID_Usuario = $usuLocal";
        $results = mysqli_query($connLocal, $consulta);

        if ($results){

            return $results->fetch_array();
        }

        return null;
    }


    // Lo mismo que la función anterior pero en este caso para asignar los vehículos con el ID de usuario correspondiente.
    function getConsulta_vehiculos($connLocal, $usuLocal){
        $consulta = "SELECT * FROM vehiculos where ID_Usuario = $usuLocal";
        $results = mysqli_query($connLocal, $consulta);
        if ($results){

            return $results;
        }

        return null;
    }


    // Función que consulta TODOS los datos de la tabla usuarios, devuelve simplemente el resultado de la consulta en caso de que sea correcta.
    function getConsulta_usuarios_all($connLocal){

        $consulta = "SELECT * FROM usuarios;";
        $results = mysqli_query($connLocal, $consulta);
        if ($results){
            return $results;
        }
        return null;
    }


    // Función que inserta los datos de un vehículo en la tabla de vehículos
    function insert_vehiculos($connLocal, $matri, $id_usu, $mark, $model, $anio_fabri){
        $consulta = "INSERT INTO vehiculos (Matricula, Id_usuario, Marca, Modelo, Año_fabricacion)
        VALUES ('$matri','$id_usu', '$mark','$model', '$anio_fabri')";
        $results = mysqli_query($connLocal, $consulta);
        if ($results){
            return $results;
        }
        return null;
    }


    //  Función que inserta los datos de un usuario en la tabla de usuarios
    function insert_usuarios($connLocal, $name, $pass, $mail, $tel){
        $consulta = "INSERT INTO usuarios (Nombre, Contraseña, Email, Telefono)
            VALUES ('$name','$pass','$mail', '$tel')";
        $results = mysqli_query($connLocal, $consulta);
        if ($results){
            return $results;
        }
        else{

            return null;
        }
    }


    //  Función que inserta los datos de un servicio en la tabla de servicios
    function insert_servicios($connLocal, $id_vehi, $name, $date){
        $consulta = "INSERT INTO servicios (ID_vehiculo, Nombre, fecha)
        VALUES ('$id_vehi','$name', '$date')";
        $results = mysqli_query($connLocal, $consulta);
        if ($results){
            return $results;
        }
        else{

            return null;
        }
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


    //Funcion para mostra los detalles del servicio (Usado en detalles_servicios)
    function detalle_servicio($connLocal,$vehiculoLocal,$id_servicioLocal){

        $consulta = "SELECT * FROM servicios where ID_vehiculo = $vehiculoLocal AND ID_Servicio = $id_servicioLocal";
        $results = mysqli_query($connLocal, $consulta);

        if ($results){

            return $results->fetch_array();
        }
        else{
            return null;
        }
    }

    //
    function suma_nums($dato1,$dato2){

        $results = $dato1 + $dato2;

        return $results;
    }
?>