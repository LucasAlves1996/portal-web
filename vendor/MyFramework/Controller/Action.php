<?php

namespace MyFramework\Controller;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view, $template)
    {
        if($template)
        {
            $this->view->content = $view;
            require_once "template/template.php";    
        }
        else
        {
            $this->view->content = $view;
            $this->content();
        }
    }

    protected function content()
    {
        require_once "App/Views/".$this->view->content.".php";
    }
}

?>