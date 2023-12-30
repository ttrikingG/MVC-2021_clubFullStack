<?php

namespace app\classes;

use app\interfaces\ValidateInteface;

class ValidateMaxLen implements ValidateInteface
{
    public function handle($field, $param)
    {
         // Obtém o valor do campo diretamente do array $_POST
        $string = isset($_POST[$field]) ? $_POST[$field] : '';

        // Remove tags HTML da entrada
        $filteredInput = strip_tags($string);
   
        if (strlen($filteredInput) > $param) {
            Flash::set($field, "O campo não pode ter mais que {$param} caracteres");
            return false;
        }
   
        Old::set($field, $string);
        return $filteredInput;
    }
}