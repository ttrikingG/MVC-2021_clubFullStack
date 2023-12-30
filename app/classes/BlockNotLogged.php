<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class BlockNotLogged
{
    public static function block(ControllerInterface $controllerInterface, array $blockMethods)
    {
        $canblockMethod = Block::getMethodToBlock($controllerInterface, $blockMethods);

        if(!isset($_SESSION['user']) and $canblockMethod) {
            BlockPostRequest::block();
            return redirect('/');
        }
    }
}

