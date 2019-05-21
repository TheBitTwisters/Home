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
}
