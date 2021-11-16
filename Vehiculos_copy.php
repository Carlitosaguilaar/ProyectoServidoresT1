<?php 
    //Traerme las funciones
    require "funciones.php";
    //CONTROLAR SESIONES
    $usu = $_GET["ID_Usuario"];
    session_start();
    if (!isset($usu)){
        header("Location:index.php");
    }
    
    if($_SESSION['id'] != $usu && $_SESSION['admin'] == 0){
       header("Location:index.php");
    }
    
?>

<?php 


$inc = require "conexion_database.php";


if ($inc){

    $results = getConsulta_usuarios($conn, $usu); //results devuelve un array
    if ($results){        
        $nombre = $results['Nombre'];
        $email = $results['Email'];
        $telefono = $results['Telefono'];        
    }

}
?>

<?php 

if ($inc){
    
    // $consulta2 = "SELECT * FROM vehiculos where ID_Usuario = $usu";
    // $results2 = mysqli_query($conn, $consulta2);
    $results2 = getConsulta_vehiculos($conn,$usu);
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/CSS/all.min.css">
        <link rel="stylesheet" href="estilos/CSS/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="app.css">
        
        <title>Lista de Vehículos</title>
    </head>
    <body>
        
        <?php require "partials/header.php" ?>
        
        <div class="contenedor_form">
            <div class="formulario">    
                
                <h1 class="ttilte">Datos del usuario</h1>
                
                <form method="GET" action="editar_usuario.php">
                    <div class="campo">
                        <label for="nombre">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" autocomplete="off" class="inputs" value="<?php echo $nombre?>">

                    </div>

                    <div class="campo">
                        <label for="email">Email: </label>
                        <input type="tel" id="email" name="email" autocomplete="off" class="inputs" value="<?php echo $email?>">
                    </div>

                    <div class="campo">
                        <label for="telefono">Telefono: </label>
                        <input type="tel" id="telefono" name="telefono" autocomplete="off" class="inputs" value="<?php echo $telefono?>">

                    </div>
                    <div class="campo">

                        <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu ?>" class="inputs">

                    </div>
                    

                    <button class="boton">Editar Usuario <i class="far fa-edit"></i></button>
                </form>

                
                <br>
                
                <div class="listado_vehiculo">
                    <h3>Listado de Vehículos</h3>
                    <i class="fas fa-car"></i>

                </div>
                
                    <?php 

                    if ($results2){

                        while ($row = $results2->fetch_array()){
                        $id_vehi = $row['ID_Vehiculo'];
                        $matricula = $row['Matricula'];
                        $marca = $row['Marca'];
                        $modelo = $row['Modelo'];

                    ?>


                    <form action="lista_servicios.php" method="GET" class="formulario2" >

                        <div class="campo">

                            <input type="submit" id="matricula" name="matricula" class="inputs" value="Mátricula: <?php echo $matricula ?>">
    
                            <input type="submit" id="marca" name="marca" class="inputs" value="Marca: <?php echo $marca ?>">
    
                            <input type="submit" id="modelo" name="modelo" class="inputs" value="Modelo: <?php echo $modelo ?>">
                            <input type="hidden" name="id_vehii" value="<?php echo $id_vehi ?>">
                            <input type="hidden" name="id_usuu" value="<?php echo $usu ?>">
                            

    
                            
                        </div>
                        <hr>
                    </form>



                    <?php 

                        } // Llave que cierra el bucle while
                    } //Llave que cierra el if

                    ?>


                
                <form action="registro_vehiculo.php" method="GET">
                    <input type="submit" value="Añadir vehículo" class="boton">
                    <input type="hidden" name="ID_Usuario" value="<?php echo $usu ?>">
                </form>
               
                
            </div> <!-- Cierre del formulario -->
        </div> <!-- cierre de contenedor_form -->
        
        
    </body>
</html>