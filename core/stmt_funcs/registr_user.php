<?php

function registrUser($array, $password)
{

    require '../core/dbconn.php';

    try {
        $query = "INSERT INTO `users`(`login`, `mail`, `phone`, `password`) VALUES (:login, :mail, :phone, :password);";
        $stmt = $pdo_connect->prepare($query);
        $stmt->execute([
            'login' => $array['login'],
            'mail' => $array['mail'],
            'phone' => $array['phone'],
            'password' => $password,
        ]);
    } catch (PDOException $exception) {
        dump($exception->getMessage());
    }
}
