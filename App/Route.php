<?php

namespace App;

use MyFramework\Init\AppLaunch;

class Route extends AppLaunch
{
    protected function initRoutes()
    {
        $routes['home'] = array(
            'path' => DIR.'/',
            'controller' => 'HomeController',
            'action' => 'index'
        );

        $routes['login'] = array(
            'path' => DIR.'/login',
            'controller' => 'LoginController',
            'action' => 'index'
        );

        $routes['logando'] = array(
            'path' => DIR.'/logando',
            'controller' => 'LoginController',
            'action' => 'login'
        );

        $routes['auth'] = array(
            'path' => DIR.'/auth',
            'controller' => 'AuthController',
            'action' => 'auth'
        );

        $routes['logout'] = array(
            'path' => DIR.'/logout',
            'controller' => 'LoginController',
            'action' => 'logout'
        );

        $routes['usuarios'] = array(
            'path' => DIR.'/usuarios',
            'controller' => 'UserController',
            'action' => 'index'
        );

        $routes['cadastra-usuario'] = array(
            'path' => DIR.'/cadastra-usuario',
            'controller' => 'UserController',
            'action' => 'create'
        );

        $routes['empresas'] = array(
            'path' => DIR.'/empresas',
            'controller' => 'EmpresaController',
            'action' => 'index'
        );

        $routes['cadastra-empresa'] = array(
            'path' => DIR.'/cadastra-empresa',
            'controller' => 'EmpresaController',
            'action' => 'create'
        );

        $routes['abrigos'] = array(
            'path' => DIR.'/abrigos',
            'controller' => 'AbrigoController',
            'action' => 'index'
        );

        $routes['cadastra-abrigo'] = array(
            'path' => DIR.'/cadastra-abrigo',
            'controller' => 'AbrigoController',
            'action' => 'create'
        );

        $routes['pessoas'] = array(
            'path' => DIR.'/pessoas',
            'controller' => 'PessoaController',
            'action' => 'index'
        );

        $routes['cadastra-pessoa'] = array(
            'path' => DIR.'/cadastra-pessoa',
            'controller' => 'PessoaController',
            'action' => 'create'
        );

        $routes['edita-pessoa'] = array(
            'path' => DIR.'/edita-pessoa',
            'controller' => 'PessoaController',
            'action' => 'getPessoa'
        );

        $routes['atualiza-pessoa'] = array(
            'path' => DIR.'/atualiza-pessoa',
            'controller' => 'PessoaController',
            'action' => 'update'
        );

        $routes['noticias'] = array(
            'path' => DIR.'/noticias',
            'controller' => 'NoticiaController',
            'action' => 'index'
        );

        $routes['e-mails'] = array(
            'path' => DIR.'/e-mails',
            'controller' => 'EmailController',
            'action' => 'index'
        );

        $routes['minha-conta'] = array(
            'path' => DIR.'/minha-conta',
            'controller' => 'UserController',
            'action' => 'dadosUser'
        );

        $this->setRoutes($routes);
    }
}

?>