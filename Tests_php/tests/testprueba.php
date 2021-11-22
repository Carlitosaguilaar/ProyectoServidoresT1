<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require "funciones.php";

final class testprueba extends TestCase
{
    public function test_getConsultausuarios(){
        require "conexion_database.php";

        $result = getConsulta_usuarios($conn,17);

        $this->assertIsArray($result);
    }

    public function test_suma_nums(){

        $result = suma_nums(12,17);

        $this->assertSame(29,$result);
    }
}