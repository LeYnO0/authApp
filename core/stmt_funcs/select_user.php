<?php


function loginSelect($login)
{

    require '../core/dbconn.php';

    try {
        $query = "SELECT * FROM users WHERE login = :login;";
        $stmt = $pdo_connect->prepare($query);
        $stmt->execute([
            'login' => $login,
        ]);
    } catch (PDOException $exception) {
        dump($exception->getMessage());
    }
    return ($stmt->fetch(PDO::FETCH_ASSOC));
}


function emailSelect($mail)
{

    require '../core/dbconn.php';

    try {
        $query = "SELECT * FROM users WHERE mail = :mail;";
        $stmt = $pdo_connect->prepare($query);
        $stmt->execute([
            'mail' => $mail,
        ]);
    } catch (PDOException $exception) {
        dump($exception->getMessage());
    }
    return ($stmt->fetch(PDO::FETCH_ASSOC));
}

function phoneSelect($phone)
{

    require '../core/dbconn.php';

    try {
        $query = "SELECT * FROM users WHERE phone = :phone;";
        $stmt = $pdo_connect->prepare($query);
        $stmt->execute([
            'phone' => $phone,
        ]);
    } catch (PDOException $exception) {
        dump($exception->getMessage());
    }
    return ($stmt->fetch(PDO::FETCH_ASSOC));
}
