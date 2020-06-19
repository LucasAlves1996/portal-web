<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class LoginController extends Action
{
    public function index()
    {
        if(isset($_SESSION['logado']))
            redirect('');

        $this->view->dados = [
            'title' => 'Login | '.SITE_NAME
        ];

        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

        $this->render('login', false);
    }

    public function logout()
    {
        session_destroy();

        redirect('');
    }
}

?>