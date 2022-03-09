<?php

namespace MF\Components;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Db
{
    public $entityManager;

    public function __construct()
    {
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(array(ROOT."/core/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        $conn = [ //todo from env
            'dbname' => 'testDB',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ];

        $entityManager = EntityManager::create($conn, $config);
        $this->entityManager = $entityManager;

    }
}