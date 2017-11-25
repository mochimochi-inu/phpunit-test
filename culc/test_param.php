<?php

    require_once "calc.php";

    class MyParamTestCasee extends PHPUnit_Framework_TestCase {

        public function add_parameter() {
            return [
                [6, 2, 8],
                [7, 2, 9],
                [8, 2, 10]
            ];
        }

        /**
        * @dataProvider add_parameter
        */
        public function test_add($input_a, $input_b, $expected_result) {

            echo "test_add()\n";
            echo "input_a: $input_a\n";
            echo "input_b: $input_b\n";
            echo "expected_result: $expected_result\n";

            $calc = new Calculator();
            $this->assertEquals($expected_result, $calc->add($input_a, $input_b));

        }

    }

?>
