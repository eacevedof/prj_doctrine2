<?php
$sPathPublic = dirname(__FILE__);
$sPathPublic = realpath($sPathPublic);
define("TFW_PATH_PUBLIC",$sPathPublic);
define("TFW_PATH_PUBLICDS",TFW_PATH_PUBLIC.DIRECTORY_SEPARATOR);
$sPathProject = realpath(TFW_PATH_PUBLICDS."..");
define("TFW_PATH_PROJECT",$sPathProject);
define("TFW_PATH_PROJECTDS",TFW_PATH_PROJECT.DIRECTORY_SEPARATOR);

include_once(TFW_PATH_PROJECTDS."vendor/autoload.php");

$sPathController = realpath(TFW_PATH_PROJECTDS."the_application/controllers/homes/controller_homes.php");
include_once $sPathController;

$oController = new TheApplication\Controllers\ControllerHomes();
$oController->index();