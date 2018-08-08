<?php
//the_public/index.php 
use AppBundle\Entities\BaseArray;

//esto tiene el entitymanager
require_once __DIR__ . '/../bootstrap.php';

//var_dump(get_included_files());die;

//Creating our greeting
$greeting = new BaseArray('Hello World!');
//Registering $greeting with the EntityManager
$entityManager->persist($greeting);

//Flushing all changes to database
$entityManager->flush();

echo 'OK!';