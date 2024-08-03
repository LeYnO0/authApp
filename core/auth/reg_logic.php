<?php

function registration($array)
{

    require CORE . '/dbconn.php';
    require STMT_FUNCS . '/select_user.php';
    require STMT_FUNCS . '/registr_user.php';


    $login = $array['login'];
    $mail = $array['mail'];
    $phone = $array['phone'];
    $password = $array['password'];
    $password_repeat = $array['password-repeat'];

    if (
        loginSelect($login) or mailSelect($mail) or phoneSelect($phone)
    ) {
        if (loginSelect($login)) {
            $_SESSION['message'] =  'Логин уже занят';
            header('Location: /');
        } elseif (mailSelect($email)) {
            $_SESSION['message'] =  'Email уже занят';
            header('Location: /');
        } elseif (phoneSelect($phone)) {
            $_SESSION['message'] =  'Телефон уже занят';
            header('Location: /');
        }
    } elseif ($password != $password_repeat) {
        $_SESSION['message'] =  'Пароли не совпадают';
        header('Location: /');
    } elseif (strlen($password) < 5 or strlen($password) > 20) {
        $_SESSION['message'] = 'Недопустимая длина пароля';
    } else {
        registrUser($array, $password);
        header('Location: /login');
    }
}
