<?php
// cli-config.php BASIC 01
//require_once "bootstrap_cli.php"; 
//da error: Fatal error: Uncaught Error: Call to undefined method Doctrine\ORM\Tools\Setup::registerAutoloadGit()

require_once "bootstrap_orig.php";//Con esta si genera las clases 16/08/2018

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($oEm);