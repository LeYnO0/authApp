<?php

session_start();

require  CORE . '/dbconn.php';

$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);
$password_repeat = md5($_POST['password-repeat']);



$check_login = mysqli_query($connect, "SELECT * FROM users WHERE login='$login';");
$check_email = mysqli_query($connect, "SELECT * FROM users WHERE mail='$email';");
$check_phone = mysqli_query($connect, "SELECT * FROM users WHERE phone='$phone';");


if (
    mysqli_num_rows($check_login) > 0
    or mysqli_num_rows($check_email) > 0
    or mysqli_num_rows($check_phone) > 0
) {
    if (mysqli_num_rows($check_login) > 0) {
        $_SESSION['message'] =  'Логин уже занят';
        header('Location: /');
    } elseif (mysqli_num_rows($check_email) > 0) {
        $_SESSION['message'] =  'Email уже занят';
        header('Location: /');
    } elseif (mysqli_num_rows($check_phone) > 0) {
        $_SESSION['message'] =  'Телефон уже занят';
        header('Location: /');
    }
} elseif ($password != $password_repeat) {
    $_SESSION['message'] =  'Пароли не совпадают';
    header('Location: /');
} elseif (strlen($password) < 9 and strlen($password) > 20) {
    $_SESSION['message'] = 'Недопустимая длина пароля';
} else {
    $query = "INSERT INTO `users`(`login`, `mail`, `phone`, `password`) VALUES ('$login', '$email', '$phone', '$password');";

    mysqli_query($connect, $query);
    
    header('Location: /login');
}
