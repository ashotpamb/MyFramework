<?php
namespace MF\controller;

use MF\controller\View;

class Controller extends View
{
    public function redirect($name)
    {
        $this->render($name);
    }
    public function a()
    {
        echo "AAA";
    }
}