<?php
//the_public/index.php 
//@cambio ns
use Entityg\BaseArray;
//use AppBundle\Entities\BaseArray;

require_once __DIR__ . '/../bootstrap.php';

//Creating our greeting
$oEntity = new BaseArray('Eduardo');
$oEntity->setOrderBy("1");
//Registering $oEntity with the EntityManager
$entityManager->persist($oEntity);

//Flushing all changes to database
$entityManager->flush();

echo 'OK!';