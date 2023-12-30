<?php

namespace app\classes;

use app\interfaces\ValidateInteface;

class ValidateRequired implements ValidateInteface
{
    public function handle($field, $param)
    {
        // Verifica se o campo existe no array $_POST
        if (!isset($_POST[$field])) {
            Flash::set($field, 'Campo obrigatório');
            return false;
        }

        // Obtém o valor do campo diretamente do array $_POST
        $string = $_POST[$field];

        // Remove tags HTML da entrada
        $filteredInput = strip_tags($string);

        if (empty($filteredInput)) {
            Flash::set($field, 'Campo obrigatório');
            return false;
        }

        Old::set($field, $string);
        return $filteredInput;
    }
}