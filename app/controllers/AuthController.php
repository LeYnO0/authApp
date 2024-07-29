<?php

session_start();

require '../core/auth/auth_logic.php';

$token;
$secretKey = CAPCHA_SECRET_KEY;

if (strlen($_POST['g-recaptcha-response']) != 0) {

    $token = $_POST['g-recaptcha-response'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$token";

    $response = file_get_contents($url);

    $responseKeys = json_decode($response, true);
    header('Content-type: application/json');

    authorization($_POST);

}else{

    $_SESSION['message'] = 'Пожалуйста, зполните капчу';

    header('Location: /login');
}
