<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$sPathSrc = __DIR__."/annotations";
$sPathSrc = realpath($sPathSrc);

$config = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode);
$config = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode, null, null, false);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$conn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);