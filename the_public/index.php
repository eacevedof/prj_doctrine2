<?php
//the_public/index.php 
use Entity\Greeting;

require_once __DIR__ . '/../bootstrap.php';

//Creating our greeting
$greeting = new Greeting('Hello World!');
//Registering $greeting with the EntityManager
$entityManager->persist($greeting);

//Flushing all changes to database
$entityManager->flush();

echo 'OK!';