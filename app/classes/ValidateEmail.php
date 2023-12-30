<?php

namespace app\classes;

use app\interfaces\ValidateInteface;

class ValidateEmail implements ValidateInteface
{
    public function handle($field, $param)
    {
        $isEmail = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

        if(!$isEmail){
             Flash::set($field, 'O campo tem que ser um email');
             return false;
        }

       $string = filter_input(INPUT_POST, $field, FILTER_SANITIZE_EMAIL);

       Old::set($field, $string);
       return $string;
    }
}