<?php
// bootstrap.php BASIC 01
use Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration,
    Doctrine\Common\Cache\ArrayCache as Cache,
    Doctrine\Common\Annotations\AnnotationRegistry,
    Doctrine\Common\ClassLoader;

//autoloading
require_once __DIR__ . '/vendor/autoload.php';
$loader = new ClassLoader('Entity', __DIR__."/entities-bundle");
$loader->register();

//configuration
$config = new Configuration();
$cache = new Cache();
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__ . '/proxies');
$config->setProxyNamespace('EntityProxy');
$config->setAutoGenerateProxyClasses(true);

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$conn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);