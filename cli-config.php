<?php


require __DIR__.'/bootstrap/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Mapping\Driver\XmlDriver;

$paths          = array(__DIR__.'/app/Domain/User/Core/Model/Entities/');
$isDevMode      = true;
$app =          require_once __DIR__.'/bootstrap/app.php';
$dbParams       = array(
    'driver'    => 'pdo_mysql',
    'host'      => env('DB_HOST', 'localhost'),
    'dbname'    => env('DB_NAME', 'MyDatabase')
    'user'      => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
);
// setup xml driver
$driver             = new XmlDriver($paths);
$config             = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$config->setMetadataDriverImpl($driver);
$entityManager      = EntityManager::create($dbParams, $config);
return ConsoleRunner::createHelperSet($entityManager);
