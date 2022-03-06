<?php
namespace MF\controller;

class View
{
    public function render($filName)
    {
        include ROOT . "/views/".$filName;
    }
}