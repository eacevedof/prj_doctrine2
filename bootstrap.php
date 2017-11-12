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

if($isDevMode){
    $cache = new \Doctrine\Common\Cache\ArrayCache;
}else{
    $cache = new \Doctrine\Common\Cache\ApcCache;
}

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver($arPaths["mappings-annotations"]);
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir($arPaths["proxies"]);
$config->setProxyNamespace("MyProject\Proxies");

//32.7. Default Repository (*OPTIONAL*)
//$config->setDefaultRepositoryClassName("MyAppBundle");
//$config->getDefaultRepositoryClassName();

if($isDevMode){
    $config->setAutoGenerateProxyClasses(true);
}else{
    $config->setAutoGenerateProxyClasses(false);
}

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
$connectionOptions = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

$entityManager = EntityManager::create($connectionOptions, $config);