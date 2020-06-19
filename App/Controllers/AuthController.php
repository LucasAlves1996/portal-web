<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class AuthController extends Action
{
    public function auth()
    {
        $user = Container::getModel('User');

        $user = $user->auth($_POST);
        
        if($user)
        {
            $_SESSION['user'] = $user;
            $_SESSION['logado'] = true;
            
            redirect('');
        }
        else
        {
            redirect('login?login=erro');
        }
    }
}

?>