<?php

namespace Home;
class Run
{
    private $controller;
    private $parameters = array();
    private $app_name;
    private $action_name;

    public function __construct()
    {
        Config::init();
        $this->splitUrl();
        $this->setNames();

        $app_folder = Config::get('PATH_APPS') . $this->app_name . '/';

        if (file_exists($app_folder . 'Controller.php')) {
            require $app_folder . 'Controller.php';
            require $app_folder . 'Model.php';
            $controller_name = '\\'.$this->app_name.'\\Controller';
            $this->controller = new $controller_name();

            $rendered = false;
            if (method_exists($this->controller, $this->action_name)) {
                if (!empty($this->parameters)) {
                    $rendered = call_user_func_array(array($this->controller, $this->action_name), $this->parameters);
                } else {
                    $rendered = $this->controller->{$this->action_name}();
                }
            } else {
                if (!empty($this->parameters)) {
                    array_unshift($this->parameters, $this->action_name);
                    $rendered = call_user_func_array(array($this->controller, 'index'), $this->parameters);
                } else {
                    $rendered = $this->controller->index($this->action_name);
                }
            }

            if ($rendered) return;
        }

        require Config::get('PATH_APPS') . 'Error/Controller.php';
        $this->controller = new \Error\Controller();
        $this->controller->not_found();
    }

    private function splitUrl()
    {
        $route = Request::get('url');

        if ($route) {
            $url = trim($route, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->app_name = isset($url[0]) ? $url[0] : null;
            $this->action_name = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $this->parameters = array_values($url);
        }
    }

    private function setNames()
    {
        if (!$this->app_name) {
            $this->app_name = Config::get('DEFAULT_APP');
        }
        if (!$this->action_name OR (strlen($this->action_name) == 0)) {
            $this->action_name = Config::get('DEFAULT_ACTION');
        }
        $this->app_name = ucwords($this->app_name);
    }
}
