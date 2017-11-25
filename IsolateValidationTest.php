<?php
include 'isolate-validation.php';

class IsolateValidationTest extends PHPUnit_Framework_TestCase {

    public function testDecimalAgeNotValid() {
        $submit = [
            'age' => '6.7',
            'price' => '100',
            'name' => 'Julia'
        ];
        list($errors, $input) = validate_form($submit);
        // 一つだけエラーを期待する -- 年齢に関するエラー
        $this->assertContains('Pliase enter a valid age.', $errors);
        $this->assertCount(1, $errors);
    }

}
?>
