<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class UserController extends Action
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
            $users = $this->search($_POST['pesquisar']);
        }
        else
        {
            $user = Container::getModel('User');
            $users = $user->read();
        }

        $module = Container::getModel('Module');
        $modulePermissions = $module->getPermissions();

        $this->view->dados = [
            'title' => 'Usuários | '.SITE_NAME,
            'users' => $users,
            'permissions' => $modulePermissions
        ];

        $this->render('usuarios', true);
    }

    public function create()
    {
        $user = Container::getModel('User');

        $user->__set('user_name', $_POST['nome']);
        $user->__set('user_email', $_POST['email']);
        $user->__set('user_login', $_POST['login']);
        $user->__set('user_password', $_POST['senha']);
        $user->__set('permission_id', $_POST['permission_id']);

        $user->create();

        redirect('usuarios');
    }

    public static function search($search)
    {
        $user = Container::getModel('User');
        
        return $user->search($search, 'user_name', 'user_email');
    }

    public function dadosUser()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        $this->view->dados = [
            'title' => 'Minha conta | '.SITE_NAME
        ];

        $this->render('dados-usuario', true);
    }
}

?>