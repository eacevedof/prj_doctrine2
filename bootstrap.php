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
//$loader = new ClassLoader('Entityg', __DIR__ . '/library');
//$loader->register();
$loader = new ClassLoader("AppBundle\Entities", __DIR__ . '/');
$loader->register();

//configuration
$config = new Configuration();
$cache = new Cache();
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__ . '/library/EntityProxy');
$config->setProxyNamespace('EntityProxy');
$config->setAutoGenerateProxyClasses(true);

//mapping (example uses annotations, could be any of XML/YAML or plain PHP)
//AnnotationRegistry::registerFile(__DIR__ . '/library/doctrine-orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
AnnotationRegistry::registerFile(__DIR__ .'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
$driver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
    new Doctrine\Common\Annotations\AnnotationReader(),
    array(__DIR__ . '/')
);
$config->setMetadataDriverImpl($driver);
$config->setMetadataCacheImpl($cache);

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$conn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

//obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);