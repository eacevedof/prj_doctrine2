<?php
//08/08/2018 este bootstrap inicialmente es para generar los ficheros
// bootstrap.php BASIC 01
use Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration,
    Doctrine\Common\Cache\ArrayCache as Cache,
    Doctrine\Common\Annotations\AnnotationRegistry,
    Doctrine\Common\ClassLoader;

require_once __DIR__."/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php";
Setup::registerAutoloadGit(__DIR__ ."/vendor/doctrine/orm");
$loader = new ClassLoader('Entity', __DIR__."/library");
$loader->register();
$loader = new ClassLoader('EntityProxy', __DIR__ . '/library');
$loader->register();

$sPathDb =  __DIR__."/the_application/appdb/db_doctrine.sqlite3";
$sPathDb = realpath($sPathDb);
// database configuration parameters
$conn = array(
    "driver" => "pdo_sqlite",
    "path" => $sPathDb,
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);