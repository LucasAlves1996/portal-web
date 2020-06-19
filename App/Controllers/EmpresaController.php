<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class EmpresaController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        if(isset($_POST['pesquisar']))
        {
            $empresas = $this->search($_POST['pesquisar']);
        }
        else
        {
            $empresa = Container::getModel('Empresa');
            $empresas = $empresa->read();
        }

        $this->view->dados = [
            'title' => 'Empresas | '.SITE_NAME,
            'empresas' => $empresas
        ];

        $this->render('empresas', true);
    }

    public function create()
    {
        $empresa = Container::getModel('Empresa');

        $empresa->__set('empresa_name', $_POST['nome']);
        $empresa->__set('empresa_email', $_POST['email']);
        $empresa->__set('empresa_telefone', $_POST['telefone']);
        $empresa->__set('empresa_cnpj', $_POST['cnpj']);
        
        $empresa->create();

        redirect('empresas');
    }

    public static function search($search)
    {
        $empresa = Container::getModel('Empresa');
        
        return $empresa->search($search, 'empresa_name', 'empresa_cnpj');
    }
}

?>