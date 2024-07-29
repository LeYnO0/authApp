<?php

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createMutable('../');
$dotenv->load();

define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CORE', ROOT . '/core');
define('RESOURCES', ROOT . '/resources');
define('VIEWS', RESOURCES . '/views');
define('CONTROLLERS', APP . '/controllers');
define('PATH', 'http://auth.local');

define('CAPCHA_SITE_KEY', $_ENV['CAPCHA_SITE_KEY']);
define('CAPCHA_SECRET_KEY', $_ENV['CAPCHA_SEKRET_KEY']);


$url = trim($_SERVER['REQUEST_URI'], '/');

require_once CORE . '/errors.php';

if ($url === '') {
    require VIEWS . '/auth/register.php';

}elseif ($url === 'login') {
    require VIEWS . '/auth/auth.php';

}elseif($url === 'RegisterController'){
    require CONTROLLERS . '/RegisterController.php';

}elseif($url === 'AuthController'){
    require CONTROLLERS . '/AuthController.php';

}elseif($url === 'dashbord'){
    require VIEWS . '/data/user_data.php';

}elseif($url === 'logout'){
    require CONTROLLERS . '/LogoutController.php';

}elseif($url === 'EditUserController'){
    require CONTROLLERS . '/EditUserController.php';

}else{
    abort();
}

?>