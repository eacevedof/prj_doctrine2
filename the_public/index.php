<?php
//the_public/index.php 
//@eaf ns
use Entities\Greeting;

require_once __DIR__ . "/../bootstrap.php";

//var_dump(get_included_files());
//Creating our greeting
$oEntity = new Greeting("Eduardo");
//$oEntity->setOrderBy("1");
//Registering $oEntity with the EntityManager
$entityManager->persist($oEntity);

//Flushing all changes to database
$entityManager->flush();

echo "OK!";