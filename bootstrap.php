<?php
// bootstrap.php BASIC 01
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;

$arPaths = [
    "mappings-annotations"=> realpath(__DIR__."/mappings-annotations"),
    "mappings-php"=> realpath(__DIR__."/mappings-php"),
    "mappings-xml"=> realpath(__DIR__."/mappings-xml"),
    "mappings-yaml"=> realpath(__DIR__."/mappings-yaml"),
    //-----------------------------------------------
    //Primero se debe generar algún tipo de metadato 
    //rutas anteriores
    //-----------------------------------------------    
    "proxies"=> realpath(__DIR__."/proxies"),
    "entities"=> realpath(__DIR__."/entities"),
    "repositories"=> realpath(__DIR__."/repositories"),
];
/**
 * @type Doctrine\ORM\Configuration
 */
//$config = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode);
$config = Setup::createAnnotationMetadataConfiguration([$arPaths["mappings-annotations"]], $isDevMode, null, null, false);
//$config = Setup::createXMLMetadataConfiguration([$sPathSrc], $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration([$sPathSrc], $isDevMode);

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$conn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);