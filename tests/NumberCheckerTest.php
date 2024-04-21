<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;
class NumberCheckerTest extends TestCase {

  private $op;

  public function setUp():void {
    $this->op = new NumberChecker(6);
  }

  public function testNumberIsEven(){
    $this->assertTrue($this->op->isEven());
  }

  public function testNumberIsPositive(){
    $this->assertTrue($this->op->isPositive());
  }
}