<?php

function authUser($method, $login, $password)
{

    require CORE . '/dbconn.php';

    try {
        $query = "SELECT * FROM users WHERE $method = :login AND password = :password;";
        $stmt = $pdo_connect->prepare($query);
        $stmt->execute([
            'login' => $login,
            'password' => $password,
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $exception) {
        dump($exception->getMessage());
    }
}
