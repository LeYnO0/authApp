<?php

require  CORE . '/dbconn.php';

$login = $_SESSION['user']['login'];

$query = "SELECT * FROM users WHERE login = '$login'";

$query_result = mysqli_query($connect, $query);

$data = mysqli_fetch_assoc($query_result);

?>