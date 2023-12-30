<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class BlockNoReason
{
    public static function block(ControllerInterface $controllerInterface, array $blockMethods)
    {
        $canblockMethod = Block::getMethodToBlock($controllerInterface, $blockMethods);

        if($canblockMethod) {
           BlockPostRequest::block();

            return redirect('/');
        }
    }
}