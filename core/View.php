<?php

namespace Home;
class View
{

    public $data;

    public function render($filename, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $this->data[$key] = $value;
            }
        }
        $filename = explode('/', $filename);
        $app_name = ucwords($filename[0]);
        $file = $filename[1];

        include Config::get('PATH_APPS') . $app_name . '/view/' . $file . '.php';
    }

    public function config($key)
    {
        return Config::get($key);
    }

    public function renderJSON($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    public function encodeHTML($str)
    {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }

    public function printData()
    {
        var_dump($this->data);
    }

}
