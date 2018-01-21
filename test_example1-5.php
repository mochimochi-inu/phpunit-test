<?php

class MyTestCase extends PHPUnit_Framework_TestCase
{
    
    public function test_test1()
    {
        echo "test1¥n";
    }
    
    public function test_test2()
    {
        $this->markTestIncomplete("not implemented yet");
        echo "test2¥n";
    }
    
    public function test_test3()
    {
        echo "test3¥n";
    }
    
}

?>