<?php



$db_host = DB_HOST;
$db_username = DB_USERNAME;
$db_password = DB_PASSWORD;
$db_name = DB_DATABASE;

try {
	$pdo_connect = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
} catch (PDOException $exception) {
	dump($exception->getMessage());
}
