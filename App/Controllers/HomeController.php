<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class HomeController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        $modules = ModulesController::read();

        $this->view->dados = [
            'title' => 'Início | '.SITE_NAME,
            'modules'   => $modules
        ];

        $this->render('home', true);
    }
}

?>