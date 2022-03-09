<?php

namespace MF\controller;

class Controller
{
    public $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(ROOT . '/view/templates');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => ROOT . '/cache/',
            'auto_reload' => true
        ]);
    }
}