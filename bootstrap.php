<?php
// bootstrap.php
require_once "vendor/autoload.php";
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src/models"),
    isDevMode: true,
);

$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost:3306',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',
];

$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
