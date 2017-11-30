<?php

require_once 'calc.php';

class MyTestCase extends PHPUnit_Framework_TestCase {

    public function test_add_normal() {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->add(1, 2));
    }

    public function test_add_mock_return_100() {
        $calc_mock = $this->getMockBuilder(Calculator::class)->setMethods(['add'])->getMock();
        $calc_mock->expects($this->once())->method('add')->will($this->returnValue(100));

        $this->assertEquals(100, $calc_mock->add(1, 2));
    }

    public function test_add_mock_return_200() {
        $calc_mock = $this->getMockBuilder(Calculator::class)->setMethods(['add'])->getMock();
        $calc_mock->expects($this->once())->method('add')->will($this->returnValue(200));

        $this->assertEquals(200, $calc_mock->add(1, 2));
    }

}

?>
