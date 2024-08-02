<?php

require '../core/constants.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

require_once CORE . '/errors.php';

if ($url === '') {
    require VIEWS . '/auth/register.php';
} elseif ($url === 'login') {
    require VIEWS . '/auth/auth.php';
} elseif ($url === 'RegisterController') {
    require CONTROLLERS . '/RegisterController.php';
} elseif ($url === 'AuthController') {
    require CONTROLLERS . '/AuthController.php';
} elseif ($url === 'dashbord') {
    require VIEWS . '/data/user_data.php';
} elseif ($url === 'logout') {
    require CONTROLLERS . '/LogoutController.php';
} elseif ($url === 'EditUserController') {
    require CONTROLLERS . '/EditUserController.php';
} else {
    abort();
}

