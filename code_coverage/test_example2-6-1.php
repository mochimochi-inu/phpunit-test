<?php

function func_a($x) {
    return $x + 1;
}

function func_b($x) {
    return $x + 2;
}

class MyTestCase extends PHPUnit_Framework_TestCase {
    public function test_func_a() {
        $this->assertEquals(4, func_a(3));
    }
}

?>
