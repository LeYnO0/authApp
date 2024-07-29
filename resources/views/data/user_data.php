<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /login');
}
require_once CONTROLLERS . '/GetUserDataController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/resources/css/edit_data.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/resources/img/icons/open.png" />

    <title>Data</title>
</head>

<body>

    <main>
        <div class="container">
            <form class="form" action="EditUserController" method="post">

                <h3 class="form-title">Данные</h3>
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input class="input" type="text" name="login" value="<?= $data['login'] ?>" placeholder="Login" require>
                <input class="input" type="text" name="phone" value="<?= $data['phone'] ?>" placeholder="Phone" require>
                <input class="input" type="text" name="mail" value="<?= $data['mail'] ?>" placeholder="Mail" require>
                <input class="input" type="password" name="password" placeholder="New password">

                <button class="reg-btn" type="submit">Обновить</button>
                <a class="home-button" href="/logout">Выйти</a>

            </form>
        </div>
    </main>

</body>

</html>