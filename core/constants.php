<?php

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createMutable('../');
$dotenv->load();

define('PATH', 'http://auth.local');

define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CORE', ROOT . '/core');
define('RESOURCES', ROOT . '/resources');
define('VIEWS', RESOURCES . '/views');
define('CONTROLLERS', APP . '/controllers');

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);

define('CAPCHA_SITE_KEY', $_ENV['CAPCHA_SITE_KEY']);
define('CAPCHA_SECRET_KEY', $_ENV['CAPCHA_SEKRET_KEY']);
