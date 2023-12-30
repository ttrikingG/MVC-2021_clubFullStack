<?php

namespace app\controllers;

use app\classes\BlockNoReason; //=> Função para bloquear  acessos
use app\classes\BlockNotLogged; //=> Função para bloquear  acessos
use app\classes\Flash;
use app\interfaces\ControllerInterface;
use app\models\User;
use app\models\activerecord\FindBy;

class Login implements ControllerInterface
{

    public string $view;
    public array $data = [];
    public string $master = 'master.php'; //=> é onde coloca  a view!!!

    public function __construct()
    {
        //BlockNoReason::block($this, ['store']);//=> Função para bloquear  acessos
    }

    public function index(array $args)
    {
        $this->view = 'login.php';
        $this->data =[
            'title' => 'Login'
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = strip_tags($_POST['password']);

        $user = new User;
        $userFound = $user->execute(new FindBy(field:'email', value:$email, fields:'firstName, lastName, password'));

        if(!$userFound){
            Flash::set('login', 'Usuário ou senhas inválidos');
            return redirect('/login');
        }

        $passwordMatch = password_verify($password, $userFound->password);

        if(!$passwordMatch){
            Flash::set('login', 'Usuário ou senhas inválidos');
            return redirect('/login');
        }

        unset($userFound->password);

        $_SESSION['user'] = $userFound;

        return redirect('/');
    }

    public function destroy(array $args)
    {
        //session_destroy();

        unset($_SESSION['user']);

        return redirect('/');
    }

    public function edit(array $args)
    {

    }
    public function show(array $args)
    {

    }
    public function update(array $args)
    {

    }
}