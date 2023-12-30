<?php

function wellcome($index)
{
    if(isset($_SESSION[$index])){
        $user = $_SESSION[$index];

        return $user->firstName.' '.$user->lastName . ' | <a href="/login/destroy">Logout</a>' ;
    }

    return 'Bem vindo visitante!!!';
} 