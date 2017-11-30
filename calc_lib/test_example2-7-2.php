<?php

require_once 'calc.php';
require_once 'calclib.php';

class MyTestCase extends PHPUnit_Framework_TestCase {

    public function test_add() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $this->assertEquals(8, $calclib->calculate(6, 2, '+'));
    }

    public function test_sub() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $this->assertEquals(4, $calclib->calculate(6, 2, '-'));
    }

    public function test_mul() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $this->assertEquals(12, $calclib->calculate(6, 2, '*'));
    }

    public function test_div() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $this->assertEquals(3, $calclib->calculate(6, 2, '/'));
    }

    /*
    * @expectedException InvalidArgumentException
    */
    public function test_exception() {
        $calc = new Calculator();
        $calclib = new CalculatorLibrary($calc);
        $calclib->calculate(6, 2, '?');
    }
}

?>
