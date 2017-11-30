<?php
require_once "calc.php";

class MyTestCase extends PHPUnit_Framework_TestCase {
    private static $calc;

    public static function setUpBeforeClass() {
        self::$calc = new Calculator();
        echo "create calculator\n";
    }

    // public function setUp() {
    //     $this->calc = new Calculator();
    //     print "create calculator\n";
    // }

    public function test_add() {
        // $calc = new Calculator();
        $this->assertEquals(8, self::$calc->add(6, 2));
    }

    public function test_sub() {
        // $calc = new Calculator();
        $this->assertEquals(4, self::$calc->sub(6, 2));
    }

    public function test_mul() {
        // $calc = new Calculator();
        $this->assertEquals(12, self::$calc->mul(6, 2));
    }

    public function test_div() {
        // $calc = new Calculator();
        $this->assertEquals(3, self::$calc->div(6, 2));
    }

    // public function test_square() {
    //     $this->assertEquals(36, self::$calc->square(6));
    // }
    //
    // public function test_cube() {
    //     $this->assertEquals(216, self::$calc->cube(6));
    // }
}

?>
