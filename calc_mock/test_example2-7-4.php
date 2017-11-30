<?php

require_once 'calc.php';
require_once 'calclib.php';

class MyTestCase extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->calc_mock = $this->getMockBuilder(Calculator::class)->setMethods(['add', 'sub', 'mul', 'div'])->getMock();
    }

    public function test_add() {
        $this->calc_mock->expects($this->once())->method('add')->will($this->returnValue(8));
        $calclib = new CalculatorLibrary($this->calc_mock);

        $this->assertEquals(8, $calclib->calculate(6, 2, '+'));
    }

    public function test_sub() {
        $this->calc_mock->expects($this->once())->method('sub')->will($this->returnValue(4));
        $calclib = new CalculatorLibrary($this->calc_mock);

        $this->assertEquals(4, $calclib->calculate(6, 4, '-'));
    }

    public function test_mul() {
        $this->calc_mock->expects($this->once())->method('mul')->will($this->returnValue(12));
        $calclib = new CalculatorLibrary($this->calc_mock);

        $this->assertEquals(12, $calclib->calculate(6, 2, '*'));
    }

    public function test_div() {
        $this->calc_mock->expects($this->once())->method('div')->will($this->returnValue(3));
        $calclib = new CalculatorLibrary($this->calc_mock);

        $this->assertEquals(3, $calclib->calculate(6, 2, '/'));
    }

    /**
    * @expectedException InvalidArgumentException
    */
    public function test_exception() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $calclib->calculate(6, 2, '?');
    }
}

?>
