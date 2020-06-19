<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class PessoaController extends Action
{
    public function index()
    {
        if(!isset($_SESSION['logado']))
        {
            redirect('login');
        }

        if(isset($_POST['pesquisar']))
        {
            $pessoas = $this->search($_POST['pesquisar'], 'pessoa_name');
        }
        else if(isset($_POST['abrigo_id']) || isset($_POST['empresa_id']))
        {
            if(!(empty($_POST['abrigo_id']) && empty($_POST['empresa_id'])))
            {
                $pessoas = $this->filtro($_POST['abrigo_id'], 'abrigo_id', $_POST['empresa_id'], 'empresa_id');
            }
            else
            {
                $pessoa = Container::getModel('Pessoa');
                $pessoas = $pessoa->read();
            }
        }
        else
        {
            $pessoa = Container::getModel('Pessoa');
            $pessoas = $pessoa->read();
        }

        $abrigo = Container::getModel('Abrigo');
        $abrigos = $abrigo->read();

        $empresa = Container::getModel('Empresa');
        $empresas = $empresa->read();

        $this->view->dados = [
            'title' => 'Pessoas | '.SITE_NAME,
            'pessoas' => $pessoas,
            'abrigos' => $abrigos,
            'empresas' => $empresas
        ];

        $this->render('pessoas', true);
    }

    public function create()
    {
        $pessoa = Container::getModel('Pessoa');

        $pessoa->__set('pessoa_name', $_POST['nome']);
        $pessoa->__set('abrigo_id', $_POST['abrigo_id']);
        $pessoa->__set('empresa_id', $_POST['empresa_id']);
        
        $pessoa->create();

        redirect('pessoas');
    }

    public function update()
    {
        $pessoa = Container::getModel('Pessoa');

        $pessoa->__set('pessoa_id', $_POST['id']);
        $pessoa->__set('pessoa_name', $_POST['nome']);
        $pessoa->__set('pessoa_data_nascimento', $_POST['data_nascimento']);
        $pessoa->__set('pessoa_email', $_POST['email']);
        $pessoa->__set('pessoa_telefone', $_POST['telefone']);
        $pessoa->__set('pessoa_endereco', $_POST['endereco']);
        $pessoa->__set('pessoa_habilidades', $_POST['habilidades']);
        $pessoa->__set('abrigo_id', $_POST['abrigo_id']);
        $pessoa->__set('empresa_id', $_POST['empresa_id']);
        
        $pessoa->update();

        redirect('pessoas');
    }

    public static function search($search, $param1 = '', $param2 = '', $param3 = '')
    {
        $pessoa = Container::getModel('Pessoa');
        
        return $pessoa->search($search, $param1, $param2, $param3);
    }

    public function filtro($valor1, $atributo1, $valor2, $atributo2)
    {
        $pessoa = Container::getModel('Pessoa');
        
        return $pessoa->filtro($valor1, $atributo1, $valor2, $atributo2);
    }

    public function getPessoa()
    {
        $pessoa = Container::getModel('Pessoa');
        $pessoa = $pessoa->getPessoa($_POST);

        $abrigo = Container::getModel('Abrigo');
        $abrigos = $abrigo->read();

        $empresa = Container::getModel('Empresa');
        $empresas = $empresa->read();

        $this->view->dados = [
            'title' => 'Pessoa | '.SITE_NAME,
            'pessoa' => $pessoa,
            'abrigos' => $abrigos,
            'empresas' => $empresas
        ];

        $this->render('pessoa', true);
    }
}

?>