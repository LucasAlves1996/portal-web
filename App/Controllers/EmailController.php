<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class EmailController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        $this->view->dados = [
            'title' => 'E-mails | '.SITE_NAME
        ];

        $this->render('e-mails', true);
    }
}

?>