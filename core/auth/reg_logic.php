<?php

function registration($array)
{

    require  CORE . '/dbconn.php';
    require CORE . '/stmt_funcs/select_user.php';
    require CORE . '/stmt_funcs/registr_user.php';


    $login = $array['login'];
    $mail = $array['mail'];
    $phone = $array['phone'];
    $password = md5($array['password']);
    $password_repeat = md5($array['password-repeat']);


    if (
        loginSelect($login) or emailSelect($mail) or phoneSelect($phone)
    ) {
        if (loginSelect($login)) {
            $_SESSION['message'] =  'Логин уже занят';
            header('Location: /');
        } elseif (emailSelect($email)) {
            $_SESSION['message'] =  'Email уже занят';
            header('Location: /');
        } elseif (phoneSelect($phone)) {
            $_SESSION['message'] =  'Телефон уже занят';
            header('Location: /');
        }
    } elseif ($password != $password_repeat) {
        $_SESSION['message'] =  'Пароли не совпадают';
        header('Location: /');
    } elseif (strlen($password) < 9 and strlen($password) > 20) {
        $_SESSION['message'] = 'Недопустимая длина пароля';
    } else {
        registrUser($array, $password);

        header('Location: /login');
    }
}
