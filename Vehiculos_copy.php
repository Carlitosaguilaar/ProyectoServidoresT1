<?php 

$usu = $_GET["ID_Usuario"];
if (!$usu){
    header("Location:registro_usu.php");
}

$inc = require "conexion_database.php";

if ($inc){

    $consulta = "SELECT * FROM usuarios where ID_Usuario = $usu";
    $results = mysqli_query($conn, $consulta);

    if ($results){

        while ($row = $results->fetch_array()){

            $nombre = $row['Nombre'];
            $email = $row['Email'];
            $telefono = $row['Telefono'];
        }
    }
}
?>

<?php 

if ($inc){
    
    $consulta2 = "SELECT * FROM vehiculos where ID_Usuario = $usu";
    $results2 = mysqli_query($conn, $consulta2);
    
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app.css">
        
        <title>Lista de Vehículos</title>
    </head>
    <body>
        
        <?php require "partials/header.php" ?>
        
        <div class="contenedor_form">
            <div class="formulario">    
                
                <h1>Lista de Vehículos</h1>

                <form method="POST" action="editar_usuario.php">
                    <div class="campo">
                        <label for="nombre">Nombre: <?php echo $nombre?></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nuevo nombre" class="inputs" required>

                    </div>

                    <div class="campo">
                        <label for="email">Email: <?php echo $email?></label>
                        <input type="tel" id="email" name="email"  placeholder="Nuevo Email" class="inputs" required>
                    </div>

                    <div class="campo">
                        <label for="telefono">Telefono: <?php echo $telefono?></label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Nuevo teléfono" class="inputs" required>

                    </div>
                    <div class="campo">

                        <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $usu ?>" class="inputs" required>

                    </div>
                    

                    <input type="submit" class="boton" name="submit" value="Editar usuario" class="inputs">
                </form>

                
                <br>
                
                <h3>Listado de Vehículos</h3>
                
               

                  

                        

                    <?php 

                    if ($results2){

                        while ($row = $results2->fetch_array()){
                            $id_vehi = $row['ID_Vehiculo'];
                            $matricula = $row['Matricula'];
                            $marca = $row['Marca'];
                            $modelo = $row['Modelo'];

                    ?>


                    <form action="lista_servicios.php" method="POST" class="formulario2" >

                        <div class="campo">

                            <input type="submit" id="matricula" name="matricula" class="inputs" value="Matrícula: <?php echo $matricula ?>">
    
                            <input type="submit" id="marca" name="marca" class="inputs" value="Marca: <?php echo $marca ?>">
    
                            <input type="submit" id="modelo" name="modelo" class="inputs" value="Modelo: <?php echo $modelo ?>">
                            <input type="hidden" name="id_vehii" value="<?php echo $id_vehi ?>">
                            <input type="hidden" name="id_usuu" value="<?php echo $usu ?>">
                            

    
                            <hr>
                        </div>
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