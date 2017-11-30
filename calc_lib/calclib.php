<?php
class CalculatorLibrary {

    public function __construct($calc) {
        $this->calc = $calc;
    }

    public function calculate($input_a, $input_b, $operation) {

        if($operation === '+') {
            return $this->calc->add($input_a, $input_b);
        } elseif($operation === '-') {
            return $this->calc->sub($input_a, $input_b);
        } elseif($operation === '*') {
            return $this->calc->mul($input_a, $input_b);
        } elseif($operation === '/') {
            return $this->calc->div($input_a, $input_b);
        } else {
            throw new InvalidArgumentException("worng operation!");
        }
    }
}

?>
