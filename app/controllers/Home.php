<?php

namespace app\controllers;

use app\models\User;
use app\models\activerecord\FindAll;

class Home
{
    public string $view;
    public array $data = [];
    public string $master = 'master.php'; //=> é onde coloca  a view!!!
    
    public function index()
    {
        $users = (new User)->execute(new FindAll(fields: 'id, firstName, lastName'));
        //var_dump($users);

        $this->view = 'home.php';
        $this->data = [
            'title' => 'Home',
            'users' => $users
        ];
    }
}