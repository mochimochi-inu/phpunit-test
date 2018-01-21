<?php 

class MyTestCase extends PHPUnit_Framework_TestCase{
    
    public static function setUpBeforeClass()
    {
        echo "setUpBeforeClass|¥n";
    }
    
    public static function TearDownAfterClass()
    {
        echo "testDownAfterClass¥n";
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