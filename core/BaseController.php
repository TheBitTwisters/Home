<?php

namespace Home;
class BaseController
{
    public $View;

    public function __construct()
    {
        Session::init();

        $this->View = new View();
    }

    public function loadModel($modelname)
    {
        $modelname = explode('/', $modelname);
        $app_name = ucwords($modelname[0]);
        $model = ucwords($modelname[1]);

        $file = Config::get('PATH_APPS') . $app_name . '/models/' . $model . '.php';
        if (file_exists($file)) {
            require $file;
            $model = '\\'.$app_name.'\\Model\\'.$model;
            return new $model();
        }
        return false;
    }

    public function pass($data)
    {
        $this->View->receive($data);
    }

    public function render($filename)
    {
        $this->View->render($filename);
    }

    public function renderJSON($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }

}
