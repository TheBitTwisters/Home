<?php

namespace Home;
class View
{

    public $data;

    public function receiveData($data)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $this->data[$key] = $value;
            }
        }
    }

    public function render($filename)
    {
        $filename = explode('/', $filename);
        $app_name = ucwords($filename[0]);
        $file = $filename[1];

        include Config::get('PATH_APPS') . $app_name . '/view/' . $file . '.php';
    }

    public function config($key)
    {
        return Config::get($key);
    }

    public function printData()
    {
        var_dump($this->data);
    }

}
