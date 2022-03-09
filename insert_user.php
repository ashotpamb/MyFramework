<?php
// create_product.php <name>
require_once "public/bootstrap.php";

$userName = $argv[1];
$userEmail = $argv[2];

//echo $newProductName;die;

$user = new \MF\models\User();
$user->name = $userName;
$user->email = $userEmail;

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->id . "\n";
