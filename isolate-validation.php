<?php

    function validate_form($submit) {
        $errors = array();
        $input = array();
        $input['age'] = filter_var($submit['age'] ?? NULL, FILTER_VALIDATE_INT);
        if($input['age'] === false) {
            $errors[] = 'Pliase enter a valid age.';
        }

        $input['price'] = filter_var($submit['price'] ?? NULL, FILTER_VALIDATE_FLOAT);
        if($input['price'] === false) {
            $errors[] = 'Please enter a valid price.';
        }

        $input['name'] = trim($submit['name'] ?? '');
        if(strlen($input['name']) == 0) {
            $errors[] = 'Your name is required.';
        }

        return array($errors, $input);
    }

 ?>
