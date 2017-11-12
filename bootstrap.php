<?php
// bootstrap.php Advanced
//http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/advanced-configuration.html

require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration;

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

if($applicationMode == "development"){
    $cache = new \Doctrine\Common\Cache\ArrayCache;
}else{
    $cache = new \Doctrine\Common\Cache\ApcCache;
}

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver($arPaths["entities"]);
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir($arPaths["proxies"]);
$config->setProxyNamespace("MyProject\Proxies");

if($applicationMode == "development"){
    $config->setAutoGenerateProxyClasses(true);
}else{
    $config->setAutoGenerateProxyClasses(false);
}

$connectionOptions = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

$em = EntityManager::create($connectionOptions, $config);