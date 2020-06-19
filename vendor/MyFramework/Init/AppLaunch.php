<?php

namespace MyFramework\Init;

abstract class AppLaunch
{
    private $routes;

    abstract protected function initRoutes();

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function run($url)
    {
        foreach($this->getRoutes() as $key => $route)
        {
            if($url == $route['path'])
            {
                $class = "App\\Controllers\\".$route['controller'];
                $action = $route['action'];

                $controller = new $class;
                $controller->$action();

                return 0;
            }
        }
        $errorClass = "App\Controllers\ErrorController";
        $error = new $errorClass;
        $error->pageNotFound();
    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>