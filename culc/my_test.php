<?php
require_once 'my_funcs.php';

class MyTestCase extends PHPUnit_Framework_TestCase {

    public function test_test1() {
        echo "test1\n";
    }

    public function test_test2() {
        $this->markTestIncomplete("not implemented yet");
        echo "test2\n";
    }

    public function test_test3() {
        echo "test3\n";
    }


    // public static function setUpBeforeClass() {
    //     echo "setUpBeforeClass\n";
    // }
    //
    // public static function tearDownAfterClass() {
    //     echo "tearDwonAfterClass\n";
    // }

    // public function setUp() {
    //     echo "setUp\n";
    // }
    //
    // public function tearDown() {
    //     echo "tearDown\n";
    // }


    // public function test_equal() {
    //     $result = 1 + 2;
    //     $this->assertEquals(3, $result);
    // }
    //
    // public function test_notequal() {
    //     $result = 1 + 2;
    //     $this->assertNotEquals(100, $result);
    // }
    //
    // public function test_string1() {
    //     $result = "Hello" . " World";
    //     $this->assertEquals("Hello World", $result);
    // }
    //
    // public function test_string2() {
    //     $string = "Hello"."World";
    //     $this->assertStringStartsWith("H", $string);
    // }
    //
    // public function test_string3() {
    //     $string = "Hello";
    //     $this->assertContains("el", $string);
    // }

    // public function test_add() {
    //     $this->assertEquals(3, add(1, 2));
    // }
    //
    // public function test_sub() {
    //     $this->assertEquals(2, sub(3, 1));
    // }

}
 ?>
