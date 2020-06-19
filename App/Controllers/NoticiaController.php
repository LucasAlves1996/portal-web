<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class NoticiaController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        $this->view->dados = [
            'title' => 'Notícias | '.SITE_NAME
        ];

        $this->render('noticias', true);
    }
}

?>