<?php
// cli-config.php (advanced)
// http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/advanced-configuration.html
// 32.8. Setting up the Console
require_once "bootstrap.php";

$cli = new Application('Doctrine Command Line Interface', \Doctrine\ORM\Version::VERSION);
$cli->setCatchExceptions(true);
$cli->setHelperSet($helperSet);
Doctrine\ORM\Tools\Console\ConsoleRunner::addCommands($cli);
$cli->run();