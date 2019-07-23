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
        $filename = explode('/', strtolower($filename));
        list($app, $file) = $filename;
        $app = ucwords($app);
        $file = $file;

        include(Config::get('PATH_APPS') . $app . '/view/' . $file . '.php');
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
