<?php
//the_public/index.php 
//@cambio ns
use Entityg\Greeting;
//use AppBundle\Entities\Greeting;

require_once __DIR__ . '/../bootstrap.php';

//Creating our greeting
$greeting = new Greeting('Hello World!');
//Registering $greeting with the EntityManager
$entityManager->persist($greeting);

//Flushing all changes to database
$entityManager->flush();

echo 'OK!';