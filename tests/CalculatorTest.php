<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        //Arrange
        $calc = new Core_Calculator();
        //Act
        $result = $calc->sum(2, 2);
        //Assert
        $this->assertEquals(4, $result);
    
    }

    public function testDevision()
    {
        //Arrange
        $calc = new Core_Calculator();
        //Act
        $result = $calc->division(4, 2);
        //Assert
        $this->assertEquals(2, $result);
    }
}
