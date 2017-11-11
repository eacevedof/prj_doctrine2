<?php
namespace Repositories;
 
use Doctrine\ORM\EntityRepository;
use Entities;
 
class AppActivityRepository extends EntityRepository
{
    public function finderMethod($arguments){
        // My custom query etc
    }
}