<?php
//the_public/index.php 
$sPathPublic = dirname(__FILE__);
$sPathPublic = realpath($sPathPublic);
define("TFW_PATH_PUBLIC",$sPathPublic);
define("TFW_PATH_PUBLICDS",TFW_PATH_PUBLIC.DIRECTORY_SEPARATOR);
$sPathProject = realpath(TFW_PATH_PUBLICDS."..");
define("TFW_PATH_PROJECT",$sPathProject);
define("TFW_PATH_PROJECTDS",TFW_PATH_PROJECT.DIRECTORY_SEPARATOR);

$arPaths = [
    get_include_path(),
    "$sPathProject",
    "$sPathProject/the_application",
    "$sPathProject/entities-bundle",
    "$sPathProject/repositories-bundle/AppBundle/Entities",
];
foreach($arPaths as $i=>$sPaths)
    if($i>0)
    {
        $sPathFix = realpath($sPaths);
        $arPaths[$i] = $sPathFix;
    }
//var_dump($arPaths);
$sPathInclude = implode(PATH_SEPARATOR,$arPaths);
set_include_path($sPathInclude);

include_once(TFW_PATH_PROJECTDS."vendor/autoload.php");

$sPathController = realpath(TFW_PATH_PROJECTDS."the_application/controllers/homes/controller_homes.php");
include_once $sPathController;

$oController = new TheApplication\Controllers\ControllerHomes();
$oController->index();