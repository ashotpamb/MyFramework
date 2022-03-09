<?php

namespace MF\Components;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Db
{
    public $entityManager;

    public function __construct()
    {
        (new DotEnv(ROOT . '/.env'))->load();

        $dbname = trim(getenv('DATABASE_NAME'),";");
        $dbuser = trim(getenv('DATABASE_USER',";"));
        $dbpassword =  trim(getenv('DATABASE_PASSWORD',";"));
        $dbhost = trim(getenv("DATABASE_HOST",";"));
        $dbdriver =  trim(getenv('DATABASE_DRIVER',";"));

        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(array(ROOT."/core/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        $conn = [
            'dbname' => $dbname,
            'user' => $dbuser,
            'password' => $dbpassword,
            'host' => $dbhost,
            'driver' => $dbdriver
        ];

        $entityManager = EntityManager::create($conn, $config);
        $this->entityManager = $entityManager;

    }
}