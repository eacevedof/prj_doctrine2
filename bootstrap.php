<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$sPathSrc = __DIR__."/mappings-annotations";
//$sPathSrc = __DIR__."/mappings-php";
//$sPathSrc = __DIR__."/mappings-xml";
//$sPathSrc = __DIR__."/mappings-yaml";
//-----------------------------------------------
//Primero se debe generar algún tipo de metadato 
//rutas anteriores
//-----------------------------------------------
//$sPathSrc = __DIR__."/proxies";
//$sPathSrc = __DIR__."/entities";
//$sPathSrc = __DIR__."/repositories";
$sPathSrc = realpath($sPathSrc);

/**
 * @type Doctrine\ORM\Configuration
 */
//$config = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode);
$config = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode, null, null, false);
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