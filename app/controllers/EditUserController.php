<?php

session_start();
require  CORE . '/dbconn.php';

$id = $_POST['id'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);

$query = "UPDATE users SET login='$login', mail='$mail', phone='$phone', password='$password' WHERE id = '$id'";

mysqli_query($connect, $query);

header('Location: /dashbord');


