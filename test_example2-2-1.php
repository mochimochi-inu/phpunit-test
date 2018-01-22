<?php 

require_once 'calc.php';

class MyTestCase extends PHPUnit_Framework_TestCase
{
    public function test_add()
    {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(6, 2));
    }
    
    public function test_sub()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->sub(6, 2));
    }
    
    public function test_mul()
    {
        $calc = new Calculator();
        $this->assertEquals(12, $calc->mul(6 ,2));
    }
    
    public function test_div()
    {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->div(6, 2));
    }
}

?>