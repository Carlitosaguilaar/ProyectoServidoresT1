<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require "funciones.php";

final class pruebaTest extends TestCase
{
    
    public function test_getConsultaUsuarios(){
        require "conexion_database.php";

        $result = getConsulta_usuarios($conn,17);

        //$this->assertSame("a", getConsulta_usuarios($conn,17));
        $this->assertIsArray($result);


        


       
    }
    public function test_insertVEHI(){
        require "conexion_database.php";
        $result2= insert_vehiculos($conn,'BRM',17,'OPEL','MUSTANG',2000);

        $this->assertNotEmpty($result2);



    }
    public function test_sumas(){
        $res = sumas(20,40);
        $this->assertSame(60,$res);
    }

    
}