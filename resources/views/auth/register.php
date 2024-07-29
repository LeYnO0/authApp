<?php
session_start();
if (isset($_SESSION['user'])) {header('Location: /dashbord');}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/img/icons/lock.png" />
    <link rel="stylesheet" href="/resources/css/main.css">
    <title>Register</title>

</head>



<body>

    <form action="RegisterController" method="post">
        <div class="container">

            <h1>Регистрация</h1>
            <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
            <hr>

            <label for="login"><b>Логин</b></label>
            <input type="text" placeholder="Введите Логин" name="login" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Введите Email" name="email" required>

            <label for="phone"><b>Телефон</b></label>
            <input type="text" placeholder="Введите Телефон" name="phone" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="password" required>

            <label for="psw-repeat"><b>Повторите пароль</b></label>
            <input type="password" placeholder="Повторите пароль" name="password-repeat" required>
            <hr>

            <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="error-msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>

            <p>Создавая учетную запись, вы принимаете наши <a href="#">Условия и конфиденциальность</a>.</p>
            <button type="submit" class="registerbtn">Регистрация</button>
        </div>

        <div class="container signin">
            <p>Уже есть аккаунт? <a href="/login">Войти</a>.</p>
        </div>
    </form>

</body>

</html>