<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class AbrigoController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        if($_SESSION['user']['permission_id'] != 2)
        {
            $error = new ErrorController;
            $error->restrictedArea();
        }

        if(isset($_POST['pesquisar']))
        {
            $abrigos = $this->search($_POST['pesquisar']);
        }
        else
        {
            $abrigo = Container::getModel('Abrigo');
            $abrigos = $abrigo->read();
        }

        $this->view->dados = [
            'title' => 'Abrigos | '.SITE_NAME,
            'abrigos' => $abrigos
        ];

        $this->render('abrigos', true);
    }

    public function create()
    {
        $abrigo = Container::getModel('Abrigo');

        $abrigo->__set('abrigo_name', $_POST['nome']);
        $abrigo->__set('abrigo_email', $_POST['email']);
        $abrigo->__set('abrigo_telefone', $_POST['telefone']);
        $abrigo->__set('abrigo_endereco', $_POST['endereco']);
        
        $abrigo->create();

        redirect('abrigos');
    }

    public static function search($search)
    {
        $abrigo = Container::getModel('Abrigo');
        
        return $abrigo->search($search, 'abrigo_name', 'abrigo_endereco');
    }
}

?>