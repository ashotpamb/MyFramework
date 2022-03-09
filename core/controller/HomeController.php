<?php

namespace MF\controller;

use MF\models\User;

class HomeController extends Controller
{
    public function index()
    {
//        $array = [1,2,3];
//
//        echo $this->twig->render('home.twig', ['array' => $array, 'name' => "Twig"]);
        $user = new User();


        $productRepository = $user->entityManager->getRepository('\MF\models\User');
        $products = $productRepository->findAll();
        echo '<pre>';
        print_r($products);
        die;

    }

}