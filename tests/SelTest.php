<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vovikha
 * Date: 12/16/11
 * Time: 5:07 PM
 * To change this template use File | Settings | File Templates.
 */
class SelTest extends PHPUnit_Extensions_SeleniumTestCase
{
    public function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://localhost');
    }

    public function testOpenPage()
    {
        //Arrange
        //Act
        $this->open('/sel');

        //Assert
        $this->assertTitle('Calc');

    }

    /**
     * @dataProvider calcData
     * @param $data
     * @param $result
     */
    public function testCalc($cm, $result)
    {
        //Arrange
        $this->open('/sel');
        $this->type('calc_cm', $cm);
        $this->click('calc_press');
        $this->click('calc_press');

        //Act
        //Assert
        $this->assertElementValueEquals('calc_result', $result);
    }

    public function calcData()
    {
        return array(
            array('2+2', 4),
            array('2+3', 5),
            array('2+5', 7),
        );
    }
}
