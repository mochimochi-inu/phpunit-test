<?php
class CalculatorLibrary {

    public function __construct($calc) {
        $this->calc = $calc;
    }

    public function calculate($input_a, $input_b, $operation) {

        switch ($operation) {
            case '+':
                return $this->calc->add($input_a, $input_b);
                break;

            case '-':
                return $this->calc->sub($input_a, $input_b);
                break;

            case '*':
                return $this->calc->mul($input_a, $input_b);
                break;

            case '/':
                return $this->calc->div($input_a, $input_b);
                break;

            default:
                throw new InvalidArgumentException("worng operation!");
                break;
        }
    }
}

?>
