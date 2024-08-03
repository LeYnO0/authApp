<?php


function authorization($array)
{
    require CORE . '/dbconn.php';
    require STMT_FUNCS . '/auth_user.php';

    $method = array_key_first($array);
    $login = $array[$method];
    $form_hashed_password = md5($array['password']);

    if (authUser($method, $login, $form_hashed_password)) {


        $_SESSION['user'] = [
            "mail" => $array['mail'],
            "phone" => $array['phone'],
        ];
        header('Location: /dashbord');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: /login');
    }
}
