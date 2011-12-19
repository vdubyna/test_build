<?php

require_once "../app/Calculator.php"; 

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        //Arrange
        $calc = new Calculator();
        //Act
        $result = $calc->sum(2, 2);
        //Assert
        $this->assertEquals(4, $result);
    
    }
}
