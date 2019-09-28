<?php
//demo
// bootstrap.php
use Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration,
    Doctrine\Common\Cache\ArrayCache as Cache,
    Doctrine\Common\Annotations\AnnotationRegistry,
    Doctrine\Common\ClassLoader;

//clase para trazas
require_once "dg.php";
require_once __DIR__ . '/vendor/autoload.php';
//@eaf ns
//$oClassLoad = new ClassLoader('Entityg', __DIR__ . '/library');
//$oClassLoad->register();
$oClassLoad = new ClassLoader("AppBundle\Entities", __DIR__ . '/');
$oClassLoad->register();

//configuration
$oConfig = new Configuration();
$oCache = new Cache();
$oConfig->setQueryCacheImpl($oCache);
$oConfig->setProxyDir(__DIR__ . '/library/EntityProxy');
$oConfig->setProxyNamespace('EntityProxy');
$oConfig->setAutoGenerateProxyClasses(true);

//mapping (example uses annotations, could be any of XML/YAML or plain PHP)
//AnnotationRegistry::registerFile(__DIR__ . '/library/doctrine-orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
AnnotationRegistry::registerFile(__DIR__ .'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
$oDriver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
    new Doctrine\Common\Annotations\AnnotationReader(),
    array(__DIR__ . '/')
);
$oConfig->setMetadataDriverImpl($oDriver);
$oConfig->setMetadataCacheImpl($oCache);

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$arDbconn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

//obtaining the entity manager
$oEm = EntityManager::create($arDbconn, $oConfig);