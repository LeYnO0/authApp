<?php



$host = DB_HOST;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$dbname = DB_DATABASE;

try {
	$pdo_connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $exception) {
	dump($exception->getMessage());
}
