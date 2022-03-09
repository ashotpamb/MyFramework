<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//
//error_reporting(E_ALL);
//define("ROOT", dirname(__DIR__));
//define("HOME_PATH", '/projects/MyFramework_test/MF/');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//require_once "../vendor/autoload.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
define("ROOT", dirname(__DIR__));
define("HOME_PATH", '/projects/MyFramework_test/MF/');


$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(ROOT."/core/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$conn = [
    'dbname' => 'testDB',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];

$entityManager = EntityManager::create($conn, $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);