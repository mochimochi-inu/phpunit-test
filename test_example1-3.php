<?php 

class MyTestCase extends PHPUnit_Framework_TestCase
{
    public function test_equal()
    {
        $result = 1 + 2;
        $this->assertEquals(3, $result);
    }
    
    public function test_notequal()
    {
        $result = 1 + 2;
        $this->assertNotEquals(100, $result);
    }
    
    public function test_string1()
    {
        $string = "Hello"." World";
        $this->assertEquals("Hello World", $string);
    }
    
    public function test_string2()
    {
        $string = "HelloWorld";
        $this->assertStringStartswith("H", $string);
    }
    
    public function test_string3()
    {
        $string = "HelloWorld";
        $this->assertContains("oWo", $string);
    }
}

?>