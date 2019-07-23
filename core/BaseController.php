<?php

namespace Home;

class BaseController
{
    private $view;

    public function __construct()
    {
        Session::init();

        $this->view = new View();
    }

    protected function loadModel($modelname)
    {
        $modelname = explode('/', strtolower($modelname));
        list($app, $model) = $modelname;
        $app = ucwords($app);
        $model = ucwords($model);

        $file = Config::get('PATH_APPS') . $app . '/models/' . $model . '.php';
        if (file_exists($file)) {
            require_once($file);
            $model = '\\'.$app.'\\Model\\'.$model;
            return new $model();
        }
        return false;
    }

    protected function render($filename, $data = null)
    {
        $this->view->receiveData($data);
        $this->view->render($filename);
    }

    protected function renderJSON($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }

}
