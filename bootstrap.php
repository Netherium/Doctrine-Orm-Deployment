<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__. DIRECTORY_SEPARATOR. 'src'), $isDevMode, null, null, false);
$dbParams = array(
//	'driver'   => 'pdo_mysql',
//	'user'     => 'root',
//	'password' => '',
//	'dbname'   => 'foo',
	'driver' => 'pdo_sqlite',
	'path'   => __DIR__ . '/data/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create( $dbParams, $config );