<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    'dbname' => 'GPSBus',
    'user' => '1',
    'password' => '1',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);

$entityManager = EntityManager::create($conn, $config);
$entityManager->getConnection()->exec("SET charset utf8");
