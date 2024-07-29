<?php

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';
//define the .env file
$dotenv = Dotenv::createMutable('../');

//upload it
$dotenv->load();
//connect the database with the parameters from .env
$connect = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

if (!$connect) {
	die('Error connection in database...');
}

