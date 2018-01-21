<?php 

class MyTestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        echo "setUp¥n";
    }
    
    public function tearDown()
    {
        echo "tearDown¥n";
    }
    
    public function test_test1()
    {
        echo "test1¥n";
    }
    
    public function test_test2()
    {
        echo "test2¥n";
    }
}

?>