<?php
//the_public/index.php 
//@eaf ns
use AppBundle\Entities\BaseArray;

require_once __DIR__ . "/../bootstrap.php";

//var_dump(get_included_files());
//Creating our greeting
$oEntity = new BaseArray("Eduardo");
$oEntity->setOrderBy("1");
//Registering $oEntity with the EntityManager
$oEm->persist($oEntity);

//Flushing all changes to database
$oEm->flush();

echo "OK!";


//\dg::pl($oEntity->find(1));
//\dg::pl($oEm->getRepository("AppBundle\Entities\BaseArray")->findAll());