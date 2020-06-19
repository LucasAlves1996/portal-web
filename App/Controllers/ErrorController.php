<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ErrorController extends Action
{
    public function pageNotFound()
    {
        $this->view->dados = [
            'title' => '404 | '.SITE_NAME,
            'error' => 'Essa página nunca existiu ou não existe mais!'
        ];

        $this->render('error', true);
    }

    public function restrictedArea()
    {
        $this->view->dados = [
            'title' => 'Área restrita | '.SITE_NAME,
            'error' => 'Você não tem permissão para acessar essa área!'
        ];

        $this->render('error', true);
    }
}

?>