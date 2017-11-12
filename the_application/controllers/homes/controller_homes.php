<?php
/**
 * @author Eduardo Acevedo Farje.
 * @link www.eduardoaf.com
 * @name TheApplication\Controllers\ControllerHomes
 * @file controller_homes.php 
 * @version 1.0.0
 * @date 12-11-2017 17:01 (SPAIN)
 * @observations:
 * @requires  
 */
namespace TheApplication\Controllers;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class ControllerHomes 
{
    private $oEm;
    public function __construct()
    {
        
        $isDevMode = FALSE;
        
        $sPathDb =  TFW_PATH_PROJECTDS."the_application/appdb/db_doctrine.sqlite3";
        $sPathDb = realpath($sPathDb);
        //print_r($sPathDb);die;
        $arDbConf = [
            "driver" => "pdo_sqlite",
            "path" => $sPathDb,
        ];
        
        $arPaths["entities-bundle"] = realpath(TFW_PATH_PROJECTDS."entities-bundle");
        //print_r($arPaths);die;
        $oConfig = Setup::createAnnotationMetadataConfiguration([$arPaths["entities-bundle"]],$isDevMode, null, null, false);
        //print_r($config);die;
        $this->oEm = EntityManager::create($arDbConf,$oConfig);
    }

    public function index()
    {
        echo "<pre>";
        print_r("ControllerHomes.index()");
        //$oBaseArray = $this->oEm->find("AppBundle\Entities\BaseArray",5);
        $oBaseArray = $this->oEm->find("BaseArray",5);
        print_r($oBaseArray);
    }

}//ControllerHomes