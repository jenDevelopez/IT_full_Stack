<?php

use PHPUnit\Framework\TestCase;
use App\VerificarGradoPorNota;
class VerificarGradoPorNotaTest extends TestCase{
  public $nota = 5.5;

  public function testisFloat(){
    $this->assertIsFloat($this->nota);
  }
  
  public function testisPositive(){
    $this->assertTrue($this->nota > 0 || $this->nota < 10);
  }
  
}