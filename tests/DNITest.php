<?php
use PHPUnit\Framework\TestCase;
use App\DNI;
class DNITest extends TestCase
{
 public function testGetDNI()
 {
 $dni = new DNI('12345678');
 $resultado = $dni->getDNIConLetra();
 
  $this->assertEquals('12345678Z', $resultado);

 }
}
