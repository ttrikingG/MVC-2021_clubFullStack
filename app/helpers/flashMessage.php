<?php

use app\classes\Flash;

function flashMessage($key)
{
    $flash = Flash::get($key);

    if(isset($flash['message'])){
        return "<span>{$flash['message'] }</span>";
    }

}