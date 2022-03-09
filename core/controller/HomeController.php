<?php

namespace MF\controller;

use MF\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();
        $users = $user->entityManager->getRepository('\MF\models\User');
        $userList = $users->findAll();
        echo $this->twig->render('home.twig', ['array' => $userList]);
        die();
    }

}