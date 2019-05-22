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
        $app_name = ucwords($modelname);
        $file = Config::get('PATH_APPS') . $app_name . '/Model.php';
        if (file_exists($file)) {
            require $file;
            $model = '\\'.$app_name.'\\Model';
            return new $model();
        }
        return false;
    }

}
