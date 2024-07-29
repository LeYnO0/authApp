<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: /dashbord');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/img/icons/lock.png" />
    <link rel="stylesheet" href="/resources/css/main.css">
    <title>Auth</title>

</head>



<body>

    <form action="AuthController" method="post">
        <div class="container">

            <h1>Авторизация</h1>
            <p>Пожалуйста, заполните эту форму, чтобы войти в систему.</p>
            <hr>
            <label><b>Войти по</b><br></label>

            <button type="button" class="switch-button" onclick="setEmailAttr()">Email</button>
            <button type="button" class="switch-button" onclick="setPhoneAttr()">Телефон</button>

            <input type="text" placeholder="Введите Email" name="mail" required" id="edit-box" required>
            <input type="password" placeholder="Введите пароль" name="password" required>

            <div class="g-recaptcha" data-sitekey="<?= CAPCHA_SITE_KEY ?>">

            </div>




            <div class="error-msg">
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="error-msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </div>

            <hr>
            <button type="submit" class="registerbtn">Войти</button>

        </div>

        <div class="container signin">
            <p>Нет аккаунта? <a href="/">Зарегестрироваться</a>.</p>
        </div>
    </form>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="/resources/js/main.js"></script>

</body>

</html>