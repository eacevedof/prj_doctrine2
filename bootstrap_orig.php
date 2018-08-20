<?php
//die("bootstrap_orig.php");
// bootstrap_orig.php BASIC 01
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
    "entities-bundle"=> realpath(__DIR__."/entities-bundle"),
    "repositories"=> realpath(__DIR__."/repositories"),
    "empty"=> "",
];
/**
 * @type Doctrine\ORM\Configuration
 */

//$oConfig = Setup::createAnnotationMetadataConfiguration([$sPathSrc], $isDevMode);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["mappings-annotations"]],$isDevMode,null,null,false);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["entities-bundle"]],$isDevMode,null,null,false);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["mappings-php"]],$isDevMode,null,null,false);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["mappings-xml"]],$isDevMode,null,null,false);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["entities"]],$isDevMode,null,null,false);
//$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["repositories"]],$isDevMode,null,null,false);
$oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["empty"]],$isDevMode,null,null,false);

//$oConfig = Setup::createXMLMetadataConfiguration([$sPathSrc], $isDevMode);   //XML
//$oConfig = Setup::createYAMLMetadataConfiguration([$sPathSrc], $isDevMode);  //YAML

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$oConn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

// obtaining the entity manager
$oEm = EntityManager::create($oConn,$oConfig);