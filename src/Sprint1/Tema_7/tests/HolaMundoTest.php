<?php
namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\HolaMundo;
class HolaMundoTest extends TestCase{

  public function testDiceHolaMundoCuandoSaluda(){
    $holaMundo = new HolaMundo();
    $this->assertEquals("Hola Mundo", $holaMundo->saluda());
  }
}