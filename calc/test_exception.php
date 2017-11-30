<?php
    require_once 'calc.php';

    class MyExceptionTestCase extends PHPUnit_Framework_TestCase {
        private static $calc;

        public static function setUpBeforeClass() {
            self::$calc = new Calculator();
        }

        /**
        * @expectedException InvalidArgumentException
        */
        public function test_div() {
            self::$calc->div(6, 0);
        }

    }
?>
