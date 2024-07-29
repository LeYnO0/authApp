<?php

function authorization($array)
{
    require CORE . '/dbconn.php';

    $method = array_key_first($array);
    $login = $array[$method];
    $form_hashed_password = md5($array['password']);

    $query = "SELECT * FROM users WHERE $method = '$login' AND password ='$form_hashed_password';";
    $queru_result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($queru_result);

    if (mysqli_num_rows($queru_result)) {
        $_SESSION['user'] = [
            "login" => $data['login'],
            "mail" => $data['mail'],
            "phone" => $data['phone'],
            "password" => $data['password']
        ];
        header('Location: /dashbord');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: /login');
    }
}
